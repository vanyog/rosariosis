<?php

DrawHeader( ProgramTitle() );

Search( 'student_id' );

if ( UserStudentID() )
{
	$student_id = UserStudentID();

        $mp_id = isset($_REQUEST['mp_id']) ? $_REQUEST['mp_id'] : '';

        $tab_id = ! empty($_REQUEST['tab_id']) ? $_REQUEST['tab_id'] : 'grades';

	// FJ fix bug no delete MP.
	if ( $_REQUEST['modfunc'] === 'update'
	        && ! empty($_REQUEST['removemp'])
		&& $_REQUEST['new_sms']
		&& DeletePrompt( _( 'Marking Period' ) ) )
	{
		//DBQuery("DELETE FROM STUDENT_MP_STATS WHERE student_id = $student_id and marking_period_id = $mp_id");
		DBQuery( "DELETE FROM STUDENT_MP_STATS
			WHERE student_id='" . $student_id . "'
			AND marking_period_id='" . $_REQUEST['new_sms'] . "'" );

		unset( $mp_id );

		// Unset modfunc & redirect URL.
		RedirectURL( 'modfunc' );
	}

	if ( $_REQUEST['modfunc'] === 'update'
	        && empty($_REQUEST['removemp']) )
	{

                if ( ! empty($_REQUEST['new_sms']) )
		{
			//FJ fix SQL bug when marking period already exist
			$smsRET = DBGet(DBQuery("SELECT * FROM STUDENT_MP_STATS WHERE student_id='".$student_id."' and marking_period_id='".$_REQUEST['new_sms']."'"));

			if (empty($smsRET))
				DBQuery("INSERT INTO STUDENT_MP_STATS (student_id, marking_period_id) VALUES ('".$student_id."', '".$_REQUEST['new_sms']."')");
				$mp_id = $_REQUEST['new_sms'];
		}

		if ( $_REQUEST['SMS_GRADE_LEVEL'] && $mp_id)
		{
			$updatestats = "UPDATE student_mp_stats SET grade_level_short = '".$_REQUEST['SMS_GRADE_LEVEL']."'
					WHERE marking_period_id = '".$mp_id."'
					AND student_id = '".$student_id."'";
			DBQuery($updatestats);
		}

		foreach ( (array) $_REQUEST['values'] as $id => $columns)
		{
			//FJ fix SQL bug when text data entered, data verification
			if ((empty($columns['GRADE_PERCENT']) || is_numeric($columns['GRADE_PERCENT'])) && (empty($columns['GP_SCALE']) || is_numeric($columns['GP_SCALE'])) && (empty($columns['UNWEIGHTED_GP']) || is_numeric($columns['UNWEIGHTED_GP'])) && (empty($columns['WEIGHTED_GP']) || is_numeric($columns['WEIGHTED_GP'])) && (empty($columns['CREDIT_EARNED']) || is_numeric($columns['CREDIT_EARNED'])) && (empty($columns['CREDIT_ATTEMPTED']) || is_numeric($columns['CREDIT_ATTEMPTED'])))
			{
				if ( $id!='new')
				{
					$sql = "UPDATE student_report_card_grades SET ";
					foreach ( (array) $columns as $column => $value)
						$sql .= DBEscapeIdentifier( $column ) . "='" . $value . "',";

					if ( $_REQUEST['tab_id']!='new')
						$sql = mb_substr($sql,0,-1) . " WHERE ID='".$id."'";
					else
						$sql = mb_substr($sql,0,-1) . " WHERE ID='".$id."'";

					DBQuery($sql);
				}
				// New: check for Title.
				elseif ( $columns['COURSE_TITLE'] )
				{
					$sql = 'INSERT INTO student_report_card_grades ';

					//FJ fix bug SQL SYEAR=NULL
					$syear = DBGet(DBQuery("SELECT syear FROM marking_periods WHERE marking_period_id='".$mp_id."'"));
					$syear = $syear[1]['SYEAR'];

					//$fields = 'ID, SCHOOL_ID, STUDENT_ID, MARKING_PERIOD_ID, ';
					$fields = 'ID, SCHOOL_ID, STUDENT_ID, MARKING_PERIOD_ID, SYEAR, ';

					//$values = db_seq_nextval('student_report_card_grades_seq').','.UserSchool().", $student_id, $mp_id, ";
					$values = db_seq_nextval('student_report_card_grades_seq').",'".UserSchool()."', '".$student_id."', '".$mp_id."', '".$syear."', ";

					if ( ! $columns['GP_SCALE'])
						$columns['GP_SCALE'] = SchoolInfo('REPORTING_GP_SCALE');

					if ( ! $columns['CREDIT_ATTEMPTED'])
						$columns['CREDIT_ATTEMPTED'] = 1;

					if ( ! $columns['CREDIT_EARNED'])
					{
						if ( $columns['UNWEIGHTED_GP'] > 0 || $columns['WEIGHTED_GP'] > 0)
							$columns['CREDIT_EARNED'] = 1;
						else
							$columns['CREDIT_EARNED'] = 0;
					}

					if ( ! $columns['CLASS_RANK'])
						$columns['CLASS_RANK']='Y';

					$go = false;
					foreach ( (array) $columns as $column => $value)
						if ( !empty($value) || $value=='0')
						{
							$fields .= DBEscapeIdentifier( $column ) . ',';
							$values .= "'" . $value . "',";
							$go = true;
						}

					$sql .= '(' . mb_substr( $fields, 0, -1 ) . ') values(' . mb_substr( $values, 0, -1 ) . ')';

					if ( $go && $mp_id && $student_id)
						DBQuery($sql);
				}
			}
			else
				$error[] = _('Please enter valid Numeric data.');
		}

		// Unset modfunc & redirect URL.
		RedirectURL( 'modfunc' );
	}

	if ( $_REQUEST['modfunc'] === 'remove' )
	{
		if ( DeletePrompt( _( 'Student Grade' ) ) )
		{
			DBQuery( "DELETE FROM student_report_card_grades
				WHERE ID='" . $_REQUEST['id'] . "'" );

			// Unset modfunc & ID & redirect URL.
			RedirectURL( array( 'modfunc', 'id' ) );
		}
	}

	// FJ fix SQL bug when text data entered, data verification
	echo ErrorMessage( $error );

	if ( ! $_REQUEST['modfunc'] )
	{
		$stuRET = DBGet(DBQuery("SELECT LAST_NAME, FIRST_NAME, MIDDLE_NAME, NAME_SUFFIX from STUDENTS where STUDENT_ID = $student_id"));
		$stuRET = $stuRET[1];

		$displayname = $stuRET['LAST_NAME'].(($stuRET['NAME_SUFFIX'])?$stuRET['suffix'].' ':'').', '.$stuRET['FIRST_NAME'].' '.$stuRET['MIDDLE_NAME'];

		$gquery = "SELECT mp.syear, mp.marking_period_id as mp_id, mp.title as mp_name, mp.post_end_date as posted, sms.grade_level_short as grade_level,
		CASE WHEN sms.gp_credits > 0 THEN (sms.sum_weighted_factors/sms.gp_credits)*s.reporting_gp_scale ELSE 0 END as weighted_gpa,
		sms.cum_weighted_factor*s.reporting_gp_scale as weighted_cum,
		CASE WHEN sms.gp_credits > 0 THEN (sms.sum_unweighted_factors/sms.gp_credits)*s.reporting_gp_scale ELSE 0 END as unweighted_gpa,
		sms.cum_unweighted_factor*s.reporting_gp_scale as unweighted_cum,
		CASE WHEN sms.cr_credits > 0 THEN (sms.cr_weighted_factors/cr_credits)*s.reporting_gp_scale ELSE 0 END as cr_weighted,
		CASE WHEN sms.cr_credits > 0 THEN (sms.cr_unweighted_factors/cr_credits)*s.reporting_gp_scale ELSE 0 END as cr_unweighted
		FROM marking_periods mp, student_mp_stats sms, schools s
		WHERE sms.marking_period_id = mp.marking_period_id and
		s.id = mp.school_id and sms.student_id='".$student_id."'
		AND mp.school_id='".UserSchool()."'
		order by posted";

		$GRET = DBGet(DBQuery($gquery));

		$last_posted = null;
		$gmp = array(); //grade marking_periods
		$grecs = array();  //grade records

		if ( $GRET)
		{
			foreach ( (array) $GRET as $rec)
			{
				if ( $mp_id == null || $mp_id == $rec['MP_ID'])
					$mp_id = $rec['MP_ID'];

				$gmp[$rec['MP_ID']] = array('schoolyear'=>formatSyear($rec['SYEAR'],Config('SCHOOL_SYEAR_OVER_2_YEARS')),
								'mp_name' => $rec['MP_NAME'],
								'grade_level' => $rec['GRADE_LEVEL'],
								'weighted_cum' => $rec['WEIGHTED_CUM'],
								'unweighted_cum' => $rec['UNWEIGHTED_CUM'],
								'weighted_gpa' => $rec['WEIGHTED_GPA'],
								'unweighted_gpa' => $rec['UNWEIGHTED_GPA'],
								'cr_weighted' => $rec['CR_WEIGHTED'],
								'cr_unweighted' => $rec['CR_UNWEIGHTED'],
								'gpa' => isset($rec['GPA']) ? $rec['GPA'] : '');
			}
		}
		else
			$mp_id = "0";

                $mpselect = '<form action="Modules.php?modname='.$_REQUEST['modname'].'&tab_id='.
                            ( isset($_REQUEST['tab_id']) ? $_REQUEST['tab_id'] : '').'" method="POST">';
		$mpselect .= '<select name="mp_id" onchange="ajaxPostForm(this.form,true);">';

		foreach ($gmp as $id => $mparray)
		{
			$mpselect .= '<option value="'.$id.'"'.(($id==$mp_id)?' selected':'').">".$mparray['schoolyear'].' '.$mparray['mp_name'].', '._('Grade Level').' '.$mparray['grade_level']."</option>";
		}

		$mpselect .= '<option value="0" '.(($mp_id=='0')?' selected':'').">"._('Add another marking period')."</option>";
		$mpselect .= '</select></form>';

		DrawHeader($mpselect);

		//FORM for updates/new records
		echo '<form action="Modules.php?modname='.$_REQUEST['modname'].'&modfunc=update&tab_id='.
		     ( isset($_REQUEST['tab_id']) ? $_REQUEST['tab_id'] : '' ).'&mp_id='.$mp_id.'" method="POST">';

		DrawHeader('',SubmitButton(_('Save')));
		echo '<br />';

		echo PopTable( 'header', $displayname );

                echo '<table style="border-collapse:separate; border-spacing:6px;"><tr><td colspan="3" class="center">'
                      ._('Marking Period Statistics').'</td></tr><tr><td>'._('GPA').'</td><td>'._('Weighted').': '.
                      sprintf('%0.3f', isset($gmp[ $mp_id ]['weighted_gpa']) ? $gmp[ $mp_id ]['weighted_gpa'] : '').
                      '</td><td>'._('Unweighted').": ".
                      sprintf('%0.3f', isset($gmp[ $mp_id ]['unweighted_gpa']) ? $gmp[ $mp_id ]['unweighted_gpa'] : '').'</td></tr>';
                echo '<tr><td>'._('Class Rank GPA').'</td><td>'._('Weighted').': '.
                      sprintf('%0.3f', isset($gmp[ $mp_id ]['cr_weighted'])   ? $gmp[ $mp_id ]['cr_weighted']  : '').'</td><td>'._('Unweighted').': '.
                      sprintf('%0.3f', isset($gmp[ $mp_id ]['cr_unweighted']) ? $gmp[ $mp_id ]['cr_unweighted']: '').'</td></tr></table>';

		echo PopTable( 'footer' ) . '<br />';

                $sms_grade_level = TextInput( isset($gmp[ $mp_id ]['grade_level']) ? $gmp[ $mp_id ]['grade_level'] : '',
                                              "SMS_GRADE_LEVEL", _('Grade Level'), 'size=3 maxlength=3');

		if ( $mp_id=="0")
		{
			$syear = UserSyear();
			$sql = "SELECT MARKING_PERIOD_ID, SYEAR, TITLE, POST_END_DATE FROM MARKING_PERIODS WHERE SCHOOL_ID='".UserSchool().
			"' AND SYEAR BETWEEN '".sprintf('%d',$syear-5)."' AND '".$syear."' ORDER BY POST_END_DATE DESC";
			$MPRET = DBGet(DBQuery($sql));

			if ( $MPRET)
			{
				$mpoptions = array();
				foreach ($MPRET as $id => $mp)
				{
					$mpoptions[$mp['MARKING_PERIOD_ID']] = formatSyear($mp['SYEAR'],Config('SCHOOL_SYEAR_OVER_2_YEARS')).', '.$mp['TITLE'];
				}

				echo '<table class="postbox cellpadding-5"><tr><td>';
				echo SelectInput(null,'new_sms',_('New Marking Period'),$mpoptions,false,null);
				echo '</td><td>';
				echo $sms_grade_level;
				echo '</td></tr></table>';
			}
		}
		else
		{
			echo $sms_grade_level;
			$tabs = array();
			$tabs[] = array('title' => 'Grades','link' => 'Modules.php?modname='.$_REQUEST['modname'].'&tab_id=grades&mp_id='.$mp_id);
			$tabs[] = array('title' => 'Credits','link' => 'Modules.php?modname='.$_REQUEST['modname'].'&tab_id=credits&mp_id='.$mp_id);
			//FJ css WPadmin
			$LO_options = array('count'=>false,'download'=>false,'search'=>false,
			'header'=>WrapTabs($tabs,'Modules.php?modname='.$_REQUEST['modname'].'&tab_id='.$tab_id.'&mp_id='.$mp_id));

			//FJ SQL error fix: operator does not exist: character varying = integer, add explicit type casts
			//                $sql = 'SELECT * FROM student_report_card_grades WHERE STUDENT_ID = '.$student_id.' AND MARKING_PERIOD_ID = '.$mp_id.' ORDER BY ID';
			$sql = "SELECT * FROM student_report_card_grades WHERE STUDENT_ID='".$student_id."' AND cast(MARKING_PERIOD_ID as integer)='".$mp_id."' ORDER BY ID";

			//build forms based on tab selected
			if ( isset($_REQUEST['tab_id']) && ($_REQUEST['tab_id']=='grades' || $_REQUEST['tab_id'] == '') )
			{
				$functions = array(
					'COURSE_TITLE' => '_makeTextInput',
					'GRADE_PERCENT' => '_makeTextInput',
					'GRADE_LETTER' => '_makeTextInput',
					'WEIGHTED_GP' => '_makeTextInput',
					'UNWEIGHTED_GP' => '_makeTextInput',
					'GP_SCALE' => '_makeTextInput',
				);

				$LO_columns = array(
					'COURSE_TITLE' => _( 'Course' ),
				'GRADE_PERCENT' => _( 'Percentage' ),
				'GRADE_LETTER' => _( 'Grade' ),
				'WEIGHTED_GP' => _( 'Grade Points' ),
				'UNWEIGHTED_GP' => _( 'Unweighted Grade Points' ),
				'GP_SCALE' => _( 'Grade Scale' ),
				);

				$link['add']['html'] = array(
					'COURSE_TITLE' => _makeTextInput( '', 'COURSE_TITLE' ),
					'GRADE_PERCENT' => _makeTextInput( '', 'GRADE_PERCENT' ),
					'GRADE_LETTER' => _makeTextInput( '', 'GRADE_LETTER' ),
					'WEIGHTED_GP' => _makeTextInput( '', 'WEIGHTED_GP' ),
					'UNWEIGHTED_GP' => _makeTextInput( '', 'UNWEIGHTED_GP' ),
					'GP_SCALE' => _makeTextInput( SchoolInfo( 'REPORTING_GP_SCALE' ), 'GP_SCALE' ),
				);
			}
			else
			{
				$functions = array(
					'COURSE_TITLE' => '_makeTextInput',
					'CREDIT_ATTEMPTED' => '_makeTextInput',
					'CREDIT_EARNED' => '_makeTextInput',
					'CREDIT_CATEGORY' => '_makeTextInput',
					'CLASS_RANK' => '_makeCheckBoxInput'
				);

				$LO_columns = array(
					'COURSE_TITLE' => _( 'Course' ),
					'CREDIT_ATTEMPTED' => _( 'Credit Attempted' ),
					'CREDIT_EARNED' => _( 'Credit Earned' ),
					'CREDIT_CATEGORY' => _( 'Credit Category' ),
					'CLASS_RANK' => _( 'Affects Class Rank' )
				);

				$link['add']['html'] = array(
					'COURSE_TITLE' => _makeTextInput( '', 'COURSE_TITLE' ),
					'CREDIT_ATTEMPTED' => _makeTextInput( '', 'CREDIT_ATTEMPTED' ),
					'CREDIT_EARNED' => _makeTextInput( '', 'CREDIT_EARNED' ),
					'CREDIT_CATEGORY' => _makeTextInput( '', 'CREDIT_CATEGORY' ),
					'CLASS_RANK' => _makeCheckBoxInput( '', 'CLASS_RANK' )
				);
			}

			$link['remove']['link'] = 'Modules.php?modname='.$_REQUEST['modname'].'&modfunc=remove&mp_id='.$mp_id;
			$link['remove']['variables'] = array('id' => 'ID');
			$link['add']['html']['remove'] = button('add');
			$LO_ret = DBGet(DBQuery($sql),$functions);
			//                ListOutput($LO_ret,$LO_columns,'.','.',$link,array(),array('count'=>false,'download'=>false,'search'=>false));
			ListOutput($LO_ret,$LO_columns,'.','.',$link,array(),$LO_options);
		}

		echo '<br /><div class="center">';

		if ( $mp_id == "0" )
		{
			echo SubmitButton(_('Remove Marking Period'), 'removemp');
		}

		echo SubmitButton(_('Save')).'</div>';
		echo '</form>';
	}
}

function _makeTextInput( $value, $name )
{
	global $THIS_RET;

	if ( $THIS_RET['ID'] )
	{
		$id = $THIS_RET['ID'];
	}
	else
	{
		$id = 'new';
	}

	//    //bjj adding 'GP_SCALE'
	if ( $name === 'COURSE_TITLE' )
	{
		$extra = 'size=20 maxlength=25';

		if ( $id !== 'new' )
		{
			$extra .= ' required';
		}
	}
	elseif ( $name === 'GRADE_PERCENT' )
	{
		$extra = 'size=6 maxlength=6';
	}
	elseif ( $name === 'GRADE_LETTER'
		|| $name === 'WEIGHTED_GP'
		|| $name === 'UNWEIGHTED_GP' )
	{
		$extra = 'size=5 maxlength=5';
	}
	elseif ( $name === 'CLASS_RANK' )
	{
		$extra = 'size=1 maxlength=1';
	}
	//elseif ( $name=='GP_VALUE')
	//    $extra = 'size=5 maxlength=5';
	//elseif ( $name=='UNWEIGHTED_GP_VALUE')
	else
	{
		$extra = 'size=5 maxlength=10';
	}

	return TextInput( $value, "values[" . $id . "][" . $name . "]", '', $extra, ( $id !== 'new' ) );
}

function _makeCheckBoxInput( $value, $name )
{
	global $THIS_RET;

	if ( $THIS_RET['ID'])
		$id = $THIS_RET['ID'];
	else
		$id = 'new';

	return CheckBoxInput( $value, "values[" . $id . "][" . $name . "]", '', '', ( $id === 'new' ) );

}
