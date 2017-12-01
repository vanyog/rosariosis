<?php

$max_cols = 3;
$max_rows = 10;
$to_family = _( 'To the parents of' ) . ':';

if ( $_REQUEST['modfunc'] === 'save' )
{
	if ( count( $_REQUEST['st_arr'] ) )
	{
		$st_list = "'" . implode( "','", $_REQUEST['st_arr'] ) . "'";

		$extra['WHERE'] = " AND s.STUDENT_ID IN (" . $st_list . ")";

		$_REQUEST['mailing_labels'] = 'Y';

		if ( $_REQUEST['to_address'] )
		{
			$_REQUEST['residence'] = 'Y';
		}

		Widgets( 'mailing_labels' );

		$extra['group'] = array( 'ADDRESS_ID' );

		$RET = GetStuList( $extra );

		if ( count( $RET ) )
		{
			$handle = PDFstart();
			echo '<table style="height: 100%" class="width-100p cellspacing-0">';

			$cols = 0;
			$rows = 0;
			$RET_count = count($RET);
			for ( $i=-(($_REQUEST['start_row']-1)*$max_cols+$_REQUEST['start_col']-1);$i<$RET_count;$i++)
			{
				if ( $i>=0)
				{
					$addresses = current($RET);
					next($RET);
					if ( $_REQUEST['to_address']=='student')
					{
						foreach ( (array) $addresses as $key => $address)
						{
							if ( $_REQUEST['student_name']=='given')
								$name = $address['LAST_NAME'].', '.$address['FIRST_NAME'].' '.$address['MIDDLE_NAME'];
							elseif ( $_REQUEST['student_name']=='given_natural')
								$name = $address['FIRST_NAME'].' '.$address['LAST_NAME'];
							else
								$name = $address['FULL_NAME'];

							$addresses[ $key ]['MAILING_LABEL'] = $name.'<br />'.mb_substr($address['MAILING_LABEL'],mb_strpos($address['MAILING_LABEL'],'<!-- -->'));
						}
					}
					elseif ( $_REQUEST['to_address']=='family')
					{
						// if grouping by address, replace people list in mailing labels with students list
						$lasts = array();
						foreach ( (array) $addresses as $address)
							$lasts[$address['LAST_NAME']][] = $address['FIRST_NAME'];

						$students = '';
						foreach ( (array) $lasts as $last => $firsts)
						{
							$student = '';
							$previous = '';
							foreach ( (array) $firsts as $first)
							{
								if ( $student && $previous)
									$student .= ', '.$previous;
								elseif ( $previous)
									$student = $previous;
								$previous = $first;
							}
							if ( $student)
								$student .= ' & '.$previous.' '.$last;
							else
								$student = $previous.' '.$last;
							$students .= $student.', ';
						}

						$addresses = array(1 => array('MAILING_LABEL' => ''.$to_family.'<br />'.mb_substr($students,0,-2).'<br />'.mb_substr($addresses[1]['MAILING_LABEL'],mb_strpos($addresses[1]['MAILING_LABEL'],'<!-- -->'))));
					}
				}
				else
					$addresses = array(1 => array('MAILING_LABEL' => ' '));

				foreach ( (array) $addresses as $address)
				{
					if ( ! $address['MAILING_LABEL'])
						continue;

					if ( $cols<1)
						echo '<tr>';
					echo '<td class="center" style="width:33%; vertical-align: middle;">';
					echo $address['MAILING_LABEL'];
					echo '</td>';

					$cols++;

					if ( $cols==$max_cols)
					{
						echo '</tr><tr><td clospan="'.$max_cols.'">&nbsp;</td></tr>';
						$rows++;
						$cols = 0;
					}

					if ( $rows==$max_rows)
					{
						echo '</table><div style="page-break-after: always"></div>';
						echo '<table style="height: 100%" class="width-100p cellspacing-0">';
						$rows = 0;
					}
				}
			}

			if ( $cols==0 && $rows==0)
			{}
			else
			{
				while ($cols!=0 && $cols<$max_cols)
				{
					echo '<td class="center" style="width:33%; height:86px; vertical-align: middle;">&nbsp;</td>';
					$cols++;
				}
				if ( $cols==$max_cols)
					echo '</tr>';
				echo '</table>';
			}
			//echo '</body></html>';
			echo '</body>';
			PDFstop($handle);
		}
		else
			BackPrompt(_('No Students were found.'));
	}
	else
		BackPrompt(_('You must choose at least one student.'));
}

if ( ! $_REQUEST['modfunc'] )

{
	DrawHeader(ProgramTitle());

        if ( isset($_REQUEST['search_modfunc']) && ($_REQUEST['search_modfunc']=='list') )
	{
		echo '<form action="Modules.php?modname='.$_REQUEST['modname'].'&modfunc=save&include_inactive='.$_REQUEST['include_inactive'].'&_search_all_schools='.$_REQUEST['_search_all_schools'].'&_ROSARIO_PDF=true" method="POST">';
		$extra['header_right'] = '<input type="submit" value="'._('Create Labels for Selected Students').'">';

		$extra['extra_header_left'] = '<table>';

//FJ add translation
		$extra['extra_header_left'] .= '<tr><td colspan="5"><b>'._('Address Labels').':</b></td></tr>';
//FJ add <label> on radio
		$extra['extra_header_left'] .= '<tr class="st"><td><label><input type="radio" name="to_address" value="" checked /> '._('To Contacts').'</label></td>';
//FJ disable mailing address display
		if (Config('STUDENTS_USE_MAILING'))
		{
			$extra['extra_header_left'] .= '<td><label><input type="radio" name="residence" value="" checked /> '._('Mailing').'</label></td>';
			$extra['extra_header_left'] .= '<td><label><input type="radio" name="residence" value="Y" /> '._('Residence').'</label></td>';
		}
		else
		{
			$extra['extra_header_left'] .= '<input type="hidden" name="residence" value="Y" />';
		}
		$extra['extra_header_left'] .= '<td colspan="2"></td></tr>';
		$extra['extra_header_left'] .= '<tr class="st"><td><label><input type="radio" name="to_address" value="student" /> '._('To Student').'</label></td>';
		$extra['extra_header_left'] .= '<td><label><input type="radio" name="student_name" value="given" checked /> '._('Last, Given Middle').'</label></td>';
		$extra['extra_header_left'] .= '<td><label><input type="radio" name="student_name" value="given_natural" /> '._('Given Last').'</label></td>';
		$extra['extra_header_left'] .= '<tr><td><label><input type="radio" name="to_address" value="family" /> '._('To the parents of').'</label></td>';

		$extra['extra_header_left'] .= '<td colspan="2"></td></tr>';
		$extra['extra_header_left'] .= '</table>';

		$extra['extra_header_right'] = '<table class="col1-align-right">';

		$extra['extra_header_right'] .= '<tr class="st"><td>'._('Starting row').'</td><td><select name="start_row">';
		for ( $row=1; $row<=$max_rows; $row++)
			$extra['extra_header_right'] .=  '<option value="'.$row.'">'.$row;
		$extra['extra_header_right'] .=  '</select></td></tr>';
		$extra['extra_header_right'] .= '<tr class="st"><td>'._('Starting column').'</td><td><select name="start_col">';
		for ( $col=1; $col<=$max_cols; $col++)
			$extra['extra_header_right'] .=  '<option value="'.$col.'">'.$col;
		$extra['extra_header_right'] .= '</select></td></tr>';

		$extra['extra_header_right'] .= '</table>';
	}

	//Widgets('course');
	//Widgets('request');
	//Widgets('activity');
	//Widgets('absences');
	//Widgets('gpa');
	//Widgets('class_rank');
	//Widgets('letter_grade');
	//Widgets('eligibility');

        if( ! isset($extra['SELECT']) ) $extra['SELECT'] = '';
	$extra['SELECT'] .= ",s.STUDENT_ID AS CHECKBOX";
	$extra['link'] = array('FULL_NAME'=>false);
	$extra['functions'] = array('CHECKBOX' => '_makeChooseCheckbox');
	$extra['columns_before'] = array('CHECKBOX' => '</a><input type="checkbox" value="Y" name="controller" checked onclick="checkAll(this.form,this.checked,\'st_arr\');"><A>');
	$extra['options']['search'] = false;
	$extra['new'] = true;

	Search('student_id',$extra);
	if ( isset($_REQUEST['search_modfunc']) && ($_REQUEST['search_modfunc']=='list') )
	{
		echo '<br /><div class="center">' . SubmitButton(_('Create Labels for Selected Students')) . '</div>';
		echo '</form>';
	}
}

function _makeChooseCheckbox($value,$title)
{
	return '<input type="checkbox" name="st_arr[]" value="'.$value.'" checked />';
}
