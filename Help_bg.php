<?php
/**
 * English Help texts
 *
 * Texts are organized by:
 * - Module
 * - Profile
 *
 * Please use this file as a model to translate the texts to your language
 * The new resulting Help file should be named after the following convention:
 * Help_[two letters language code].php
 *
 * @author François Jacquet
 *
 * @uses Heredoc syntax
 * @see  http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
 *
 * @package RosarioSIS
 * @subpackage Help
 */

// DEFAULT.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['default'] = <<<HTML
<p>
       Като администратор Вие можете да настройвате училищата в тази система, да променяте студентите и потребителите и да виждате важните отчети за студентите.</p>
<p>
       Имате достъп до всяко училище в системата. За да изберете училище, над което да работите, използвайте падащото меню в лявата рамка. Софтуерът автоматично ще опресни данните за избраното училище на работния екран. Можете също да промените учебната година и текущия период за оценяване от другите две падащи менюта.</p>
<p>
       Докато използвате RosarioSIS, ще забележите, че в страничното меню се показват различни неща. Когато изберете студент или потребител, за да работите с неговите данни, името му, с кръст пред него, се показва под падащото меню с периода за оценяване. Докато работите със софтуера, Вие ще продължите да работите с данните на този студент или потребител. Ако искате да го смените, щракнете върху кръста пред името му и после изберете друг. Можете също да отворите основната информация за студента, като щракнете върху името му.</p>
<p>
        Когато щракнете върху иконата на който и да е модул в страничното меню, ще видите списък на достъпните за Вас програми, от този модул. Щракването върху името на програма стартира тази програма в централната област на екрана и зарежда помощната информация за нея, която може да се покаже в областта за помощ.
</p>
<p>
        В централната част на екрана на RosarioSIS, Вие ще виждате данни, които можете да променяте. Най-често ще можете да щракнете върху това, което искате да промените, за да получите възможност да го редактирате. След като направите промени и ги запазите, стойността ще възстанови първоначалния си изглед.
</p>
<p>
        Можете да излезете от системата на RosarioSIS по всяко време, щом решите, с щракване върху хипервръзката "Изход".
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'teacher' ) :

	$help['default'] = <<<HTML
<p>
        Като преподавател Вие можете да преглеждате информацията на студентите и графиците на занятията на студентите, на които преподавате, и можете да въвеждате присъствието, оценките и дописка на тези студенти. Имате достъп до програмата Дневник на оценките, за да се информирате за оценките на студентите. Програмата Дневник на оценките е интегрирана с програмата Въвеждане на оценки, както и с програмата Допускане. От Дневник на оценките може на само да се информирате за оценките, но и да отпечатате отчет за напредъка на всеки Ваш студент.
</p>
<p>
        За да изберете период над който да работите, посочете го от падащото меню в ляво. Екрана автоматично ще се опресни с данните от посочения период. Можете също де смените учебната година и текущия учебен период.
</p>
<p>
        Докато имползвате RosarioSIS, ще забележите, че в лявото меню се появяват резлични неща. Когато изберете студент, името на студента ще се появи с кръст пред него, под падащото меню за учибншя период. Когато сменяте програмите, ще продължите да работите с данните за този студент. Ако искаде да го смените, щракнете кръста пред името му. Щракването върху именто на студента ще отвори страницата с основната информация за студента.
</p>
<p>
        Когато щракнете върху иконата на който и да е модул в страничното меню, ще видите списък на достъпните за Вас програми, от този модул. Щракването върху името на програма стартира тази програма в централната област на екрана и зарежда помощната информация за нея, която може да се покаже в областта за помощ, когато щракнете бутона "Помощ" отдолу на екрана.
</p>
<p>
        В програмата "Оценки", ще видите списък от данни, които може да променяте. В повечето случаи ще трябва щраквате върху това, което искате да промените, за да получите достъп за редактиране. Щом промените стойността и щрекнете бутона "Запазване", новата стойност ще се покаже по нормалния за страницата начин.
</p>
<p>
        Можете да излезете от RosarioSIS във всеки момент, щраквайки бутона "Изход".
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'parent' ) :

	$help['default'] = <<<HTML
<p>
        Като родител, Вие можете да видите информацията за своето дете: разписанието, заданията, оценките, извънкласните занимания и присъствието.
</p>
<p>
        За да изберете детето, информацията на което, ще разглеждате, използваайте подащото меню влюво. Програмата автоматично ще се опресни с информацията на другото дете щом го изберете. Можете също да промените учебната година и текущия учебен период, чрез другите падащи менюта.
</p>
<p>
        Докато използвате RosarioSIS, ще виждате, че различни неща се появяват в страничното меню. Щракването върху името на програма ще предизвика стартиране на тази програма в работната част на екрана, а при щракване на бутона "Помощ", отдолу ще се покаже помощна информация за нея.
</p>
<p>
        Можете да излезете от RosarioSIS във всеки момент, щраквайки бутона "Изход".
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'student' ) :

	$help['default'] = <<<HTML
<p>
        Като студент Вие можете да преглеждате своята информация, разписания, задания, оценки, eligibility, and attendance.
</p>
<p>
        Можете да смените учебната година и текущия учебен период от падащото меню в ляво.
</p>
<p>
        Докато имползвате RosarioSIS, ще забележите, че в лявото меню се появяват резлични неща. Когато щракнете върху иконата на който и да е модул в страничното меню, ще видите списък на достъпните за Вас програми, от този модул. Щракването върху името на програма стартира тази програма в централната област на екрана и зарежда помощната информация за нея, която може да се покаже в областта за помощ, когато щракнете бутона "Помощ" отдолу на екрана.
</p>
<p>
        Можете да излезете от RosarioSIS във всеки момент, щраквайки бутона "Изход".
</p>
HTML;

endif;


// SCHOOL SETUP ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['School_Setup/Schools.php'] = <<<HTML
<p>
        Програмата <i>Информация за училище</i> Ви позволява да промените, името, адреса и директора на избраното училище. За да промените нещо, щракнете върху него, а след като го промените, щракнете бутона "Запазване".
</p>
HTML;

	$help['School_Setup/Schools.php&new_school=true'] = <<<HTML
<p>
        Програмата <i>Добавяне училище</i> Ви позволява да добавите училище в системата. Попълнете информацията за новото училище и щракнете бутона "Запазване".
</p>
<p>
        За да превключите от показваното училище към новото, изберете новото училище от падащото меню в лявата страна на екрана.
</p>
HTML;

	$help['School_Setup/CopySchool.php'] = <<<HTML
<p>
        Програмата <i>Копиране училище</i> е добър начин да добавите ново училище в RosarioSIS, в което учебните периоди, периодите за оценяване, оценките, нивата на обучение, скалите за оценяване и кодовете за присъствие са като в училището от което копирате. Разбира се, ще можете да направите, специфични за новото училище промени, след като създадете копието.
</p>
<p>
        Ако не искате да копирате някои от елементите, щракнете и махнете отметките пред имената им.
</p>
<p>
        Въведете името на новото училище в полето "Ново название на училище".
</p>
<p>
        Накрая, щракнете бутона "Да" за да се създаде ново училище с настройки, като на копираното.
</p>
HTML;

	$help['School_Setup/MarkingPeriods.php'] = <<<HTML
<p>
        Програмата <i>Периоди на оценяване</i> Ви позволява да зададете периодите на оценяване във Вашето училище. Има три нива за дефиниране на периоди: семестри, четвърти и продължаващи периоди. Независимо от имената, може да има по-малко или повече от 2 семестъра и пивече или по-малко от 4 четвърти. Аналогично, може да име произволен брой продължаващи периоди.
</p>
<p>
        За да добавите период за оценяване, щракнете върху иконата (+) в колоната, съответстваща на периода за оценяване, който искате да добавите. После попълнете информацията за новия период в полетата над списъка с периодите за оценяване и щракнете бутона "Запазване".
</p>
<p>
        Датите на "Начало на оценяване" и "Край на оценяване" определят периода пез който преподавателите могат да въвеждат крайните оценки.
</p>
<p>
        За да промените период на оценяване, щрекнете върху това, което искате да промените в сивия правоъгълник отгоре, показващ данните за избрания период. След като направите промена, щракнете бутона "Запазване".
</p>
<p>
        За да изтриете период на оценяване, изберете периода щраквайки върху името му и после щракнете бутона "Изтриване", горе в дясно. Ще бъдете попитани за потвърждение.
</p>
<p>
        Обарнете внимение, че времето от началото до края на периода и времето от началото до края на оценяването не могат да се припокриват. Също така два периода от едно и също ниво не трябва да имат еднакви места за подреждане.
</p>
HTML;

	$help['School_Setup/Calendar.php'] = <<<HTML
<p>
        Програмата <i>Календари</i> Ви позволява да настроите Вашия училищен календар за годината. Календарът по подразбиране показва тикущия месец. Месецът и годината, които се показват може да се сменят чрез избиране от падащите минюта за месец и година, в горната част на екрана.
</p>
<p>
        За цели учебни дни отметката в десния горен ъгъл на клетката за деня, трябва да е поставена. За дни, в които не се учи цял ден, отметката трябва да не е сложена, а в полето до отметката се попълва колко минути се учи през деня. В дните, в които не се учи, не се поставя отметка и полето се оставя празно. За да правите промени щракнете върху това, което искате да промените. След нанасяне на промени, щракнете бутон "Запазване".
</p>
<p>
        За да съставите своя календар в началото на учебната година, трябва да щракнете "Създаване нов календар" или "Редактиране този календар". Тогава можете да зададете: датите на началото и края на учебната година и кои са учебните дни в седмицата. За да запаците данните, щракнете бутона "Да". Сега можете да обходите календара и да зададете непълните и неучебните дни.
</p>
<p>
        Календарът е място за показване на събития. Това може да включва всякакви събития, от отцъствието на някой преподавател до спортни събития. Тези събития са видими от другите администратори, както и от родителите и учителите от училището.
</p>
<p>
        За да добавите събитие, щракнете бутон (+) в долния ляв ъгъл на датата на събитието. В изскачащия прозорец, който се показва, въведете информацият за събитието и щракнете бутона "Запазване". Изскочилия прозорец се скрива и календарът автоматично се опреснява, за да покаже добавеното събитие.
</p>
<p>
        За да промените събитие, щракнете върху името на събитието и променете информацията за събитието в изскачащия прозорец, чрез щракване върху съответната информация. Щракнете бутона "Запазване". Изскачилия прозорец ще се затвори и календарът автоматично ще се опресни, за да покаже промяната.
</p>
<p>
        Ако училището използва смени или номерирани дни, номерата на днити се показват в правоъгълниците на дните.
</p>
HTML;

	$help['School_Setup/Periods.php'] = <<<HTML
<p>
        Програмата <i>Периоди</i> Ви позволява да настроите учебните периоди (часове) на училището. Средните и висшите училища може да имат повече учебни часове, докато началните и основни училища е възможно да имат само един учебен период (наречен цял ден) или три (цял ден, предиобед и следобед).</p>
<p>
        За да добавите период попълнете полетата на последния ред с название, кратко име, номер за подреждане, продължителност в минути и щракнете бутона "Запазване".
</p>
<p>
        За да промените период щракнете върху това, което искате да промените, променете го и щракнете бутона "Запазване".
</p>
<p>
        За да изтриете период, щракнете иконата за изтриване (-). Ще бъдете попитани да потвърдите, че искате да се изтрие.
</p>
HTML;

	$help['School_Setup/GradeLevels.php'] = <<<HTML
<p>
        Програмата "<i>Нива на обучение</i>" ви позволява да определите нивата на обучение в училището.
</p>
<p>
        За да добавите ниво на обучение, попълнете празните полета на последния ред на таблицата, съответно в колоните Название, Кратко име, Подреждане и Следващо ниво и щракнете бутона "Запазване". "Следващо ниво" означава нивото, в което ще приминат студентите след като завършат учебната година.
</p>
<p>
        За да редактирате някое ниво на обучение, щрекнете върху това, което искате да промените, направете промяна на информацията и щракнете бутона "Запазване".
</p>
<p>
        За да изтриете някое ниво на обучение, щракнете върху знака (-) на реда от таблицата с това ниво. Ще бъдете запитани да потвърдите изтриването.
</p>
HTML;

	$help['School_Setup/Rollover.php'] = <<<HTML
<p>
        Чрез програмата <i>Пренасяне</i> се копират данните от текущата година към следващата учебна година. Студентите се записват в следващото ниво на обучение и цялата информация за училището се копира в следващата учебна година.
</p>
<p>
        Данните, които се копират включват периодите, периодите за оценяване, потребителите, курсовете, записването на студентите, кодовете за отчети на оценките, кодовете за присъствие, и дейностите за допускане.
</p>
HTML;

	$help['School_Setup/Configuration.php'] = <<<HTML
<p>
        Програмата <i>Настройки училище</i> предлага различни групи от възможности за настройване:
</p>
<ul>
        <li>За системата RosarioSIS:
		<ul>
			<li>
			        <i>Заглавие на системата</i> и <i>Название на програмата</i>: за индивидуализиране на RosarioSIS
			</li>
			<li>Задаване на <i>Подразбираща се тема</i>, и евентуално да поставите отметка <i>Наложена</i> за да не могат потребителите да избират за себе си различна от тази тема.
			</li>
			<li>
			        <i>Създаване профил потребител</i> и <i>Създаване профил студент</i>: позволява регистриране онлайн. Ще се покажат съответни хипервръзки върху страницата за влизане.
			</li>
			<li>
			        <i>Поле с имейл на студент</i>: определя кое поле за данни ще използвате, за съхранение на имейлите на студентите. Това може да бъде полето Потребителско име всяко друго текстово поле от подстраница Обща информация за студента. Задаването на това поле ще активира нови възможности на RosarioSIS за студентите като "Възстановяване на парола".
			</li>
		</ul>
	</li>
	<li>Училище:
		<ul>
			<li>
			        <i>Учебна године в две календарни години</i>: определя дали учебната година ще се показва като "2017" или "2017-2018"
			</li>
			<li>
			        <i>Лого на училището (.jpg)</i>: е възможност да качите файл с лого на училището (показва се в Report Cards, Справки, Информация за училище и Печат информация студенти)
			</li>
			<li>
			        <i>Валутен символ</i>:  е означението на паричната идиница, използвано при показване на суми в Счетоводство и модул Сметки студенти
			</li>
		</ul>
	</li>
	<li>Студенти:
		<ul>
			<li>
			        <i>Показване пощенски адрес</i>: означава дали да се записва и показва студентския пощенски адрес, като различен адрес.
			</li>
			<li>
				<i>Check Bus Pickup / Dropoff by default</i>: whether to check Bus Pickup / Dropoff checkboxes by default when entering the student address
			</li>
			<li>
			        <i>Позволяване допълнителна информация за контакт</i>: дава възможност за въвеждане на допълнителна информация за контакт на студентите
			</li>
			<li>
			        <i>Използване коментари към семестри вместо към четвърти</i>: означава да имате нови полета за коментари към семестрите вместо към четвъртите
			</li>
			<li>
			        <i>Ограничаване съществуващите контакти и адреси до училището</i>: глобална настройка (прилагана към всички училища), която ще ограничи списъците от потребители и адреси до тези асоциирани с текущото училище на потребителите, когато се въвежда съществуващ контакт или адрес
			</li>
		</ul>
	</li>
	<li>Оценки:
		<ul>
			<li>
			        <i>Оценки</i>: определя дали Вашето училище използва само оценки в проценти, оценки в проценти и букви, или само оценки с букви
			</li>
			<li>
			        <i>Скриване коментари на оценки освен през период на посещаване</i>: означава да не се показват коментари на оценките в периодите, когато не се посещава училище
			</li>
			<li>
			        <i>Позволяване преподавателите да променят оценки след период на оценяване</i>, който се задава в настройките Периоди за оценяване в Настройки училище
			</li>
			<li>
			        <i>Позволяване анонимна статистика на оценките за родители и студенти / Administrators and Teachers</i>: анонимна статистика на оценките ще се пиказва на родителите и студентите / администраторите и преподавателите
			</li>
		</ul>
	</li>
	<li>Присъствие:
		<ul>
			<li>
			        <i>Един цял учебен ден в минути</i>: Ако студент прекарва в училище 300 минути или повече, RosarioSIS автоматично ще отбележи, че студентът е присъствал през този ден. Ако е бил в училище от 150 до 299 минути ще му се отбилежи половин ден присъствие. Ако присъствието на студента е по-малко от 150 минути, ще бъде отбелязан като отсъстващ. Ако за Вашето училище на времето от 300 минути съответства друга стойност, попълнете я в това поле.
			</li>
			<li>
			        <i>Брой дни преди / след учебния ден, в които преподавателите могат да редактират присъствието
</i>: се оставя прамно, за да могат преподавателите да редактират присъствието по всяко време
			</li>
		</ul>
	</li>
	<li>Хранене:
		<ul>
			<li>
			        <i>Минимален баланс за храна за напомняне</i>: е минималният баланс за храна, под който на студента и неговите родители започва да се показва предупреждение и се изпраща съобщение
			</li>
			<li>
			        <i>Минимален баланс за храна</i> е минималният, разрешен баланс за храна
			</li>
			<li>
			        <i>Целеви баланс за храна</i> стойността на баланса за храна, която се цели да се постигне
			</li>
		</ul>
	</li>
</ul>
<p>
        Подстраница <b>Модули</b> служи за управляване модулите на RosarioSIS. От нея се актидират или деактивират инсталираните модули. Активирането се извършва с щракване върху знака (+) пред името на модул, а деактивирането - с щракване на знака (-). Щракването върху названието на модул, когато е с цвят на хипервръзка, отваря изскачащ прозорец с информация за модула, намираща се в неговия README.md файл.
</p>
<p>
        Подстраница <b>Добавки</b> служи за ативиране или деактивиране на инсталираните добавки. Активирането / деактивирането става с щракване на знаците (+) / (-), а щракването върху названието, отваря прозорец с информация за добавката.
</p>
HTML;

	$help['School_Setup/SchoolFields.php'] = <<<HTML
<p>
        Програмата <i>Полета данни за училище</i> Ви позволява да добавите нови данни към екрана "Инфирмация за училище".
</p>
<p>
        Добавяне на ново поле за данни
</p>
<p>
        Щракнете знака "+". Попълнете Име на полето данни, изберете топа на данните от падащото меню Тип отговор.
</p>
<ul>
<li>
        Тъпът "Падащо меню" създава падащо меню, с което се избира една от възможностите: "Н/З" - не е зададена стойност или само една от няколко други стойности. Стойностите, между които ще се избира се попълват в полето по-долу - по една стойност на ред.
</li>
<li>
        Типът "Падащо маню с добавяне" създава падащо меню, към което може да се добави и друга стойност. За да добавите стойност, избирате от падащото меню възможността -Редактиране- и щраквате бутона "Запазване". Тогава можете да щракнете върху -Редактиране-, да въведете на неговото място нова стойност и да я запазите с второ щракване на бутона "Запазване".
</li>
<li>
        Типът "Падащо меню с редактиране" е подобен на "Падащо маню с добавяне".
</li>
<li>
	"Coded Pull-Down" fields are created by adding options to the large text box respecting the following pattern: "option shown"|"option stored in database" (where | is the "pipe" character). For example: "Two|2", where "Two" is displayed on screen to the user, or in a downloaded spreadsheet, and "2" is stored in the database.
</li>
<li>
	"Export Pull-Down" fields are created by adding options to the large text box respecting the same pattern used for "Coded Pull-Down" fields ("option shown"|"option stored in database"). For example: "Two|2", where "Two" is displayed on screen to the user, and "2" is the value in a downloaded spreadsheet, but "Two" is stored in the database.
</li>
<li>
        Типът "Избиране няколко възможности" означава показване на списък от отметки, от които потребителят избира кои да постави.
</li>
<li>
        Типът "Текст" показва поле за попълване на един ред текст, не по-дълъг от 255 символа.
</li>
<li>
        Типът "Дълъг текст" показва поле за попълване на многоредов текст с максимална дължина от 5000 символа.
</li>
<li>
        Типът "Отметка" създава отметка, която, ако е поставена, означава "Да", а ако не е поставена, означава "Не".
</li>
<li>
        Типът "Число" създава поле, в което трябва да се напише число.
</li>
<li>
        Типът "Дата" показва падащи менюта за избиране на месеца, деня и годината на дата от календара.
</li>
</ul>
<p>
        Отметката "Необходимо", ако е поставена, ще направи попълването на информацията задължително. При непопълване и опит за запазване, ще се показва предупреждение и няма да се извършва запазване.
</p>
<p>
        "Подреждане" е число, определящо на кое по ред място да се показва информацията на страница Инфирмация за училище.
</p>
<p>
        Истриване на поле данни
</p>
<p>
        Можете да изтриете израно поле данни чрез щракване на бутона "Изтриване" в горния десен ъгъл на страницата. Имайте предвид, че ако изтриете поле, което вече е използвано и попълвано с данни, ще изгубите всички попълнени в това поле данни.
</p>
HTML;

	// Teacher & Parent & Student.
else :

	$help['School_Setup/Schools.php'] = <<<HTML
<p>
        Страница <i>Информация за училище</i> показва името, адреса и ръководителя на училището.
</p>
HTML;

	$help['School_Setup/Calendar.php'] = <<<HTML
<p>
	<i>Calendars</i> is a display of school events and your student's assignments. The calendar also displays whether or not school is in attendance on any given day. By default, the calendar displays the current month. The month and year displayed can be changed by changing the month and year pull-down menus at the top of the screen.
</p>
<p>
	The titles of school events and assignments are displayed in each date's box. Clicking on these titles will open a popup window that displays more information about the event or assignment. School events are preceded by a black stripe and assignments are preceded by a red stripe.
</p>
<p>
	For days that school is in attendance all day, the date's box is green. On partial days, the number of minutes that school is in session is displayed. If the school is not in attendance at all on any given day, the date's box is pink.
</p>
<p>
	If the school uses a Rotation of Numbered Days, the day's number is displayed in the day's box.
</p>
HTML;

endif;


// STUDENTS ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Students/Student.php&include=General_Info&student_id=new'] = <<<HTML
<p>
	<i>Add a Student</i> allows you to add a student to the system and enroll it.
</p>
<p>
	To add the student, enter the birth date, social security number, ethnicity, gender, birthplace, and grade. Then, select the effective date of the student's enrollment and the enrollment code from the pull-down menus at the bottom of the page. If you wish to specify a student ID for this student, enter the student ID into the text field labeled RosarioSIS ID. if you leave this field blank, RosarioSIS will generate an unused student ID and assign it to the new student. Finally, click the "Save" button at the top of the screen.
</p>
HTML;

	$help['Students/AddUsers.php'] = <<<HTML
<p>
	<i>Associate Parents with Students</i> allows you to associate parents to students.
</p>
<p>
	Once a parent's account has been set up, their children must be associated to their account with this program. If you have not already chosen a student earlier in your session, select a student by using the "Find a Student" Search screen. Next, search for a user to associate with the student. From the search result, you can select any number of users. You can select all the users in the list by checking the checkbox in the column headings above the list. After you have selected each desired user from this list, click the "Add Selected Parents" button at the top of the screen.
</p>
<p>
	At any time after a student has been selected, you can see the parents already associated with that student. These parents are listed to the top of the user search screen / search results. These parents can be disassociated from this student by clicking the delete icon (-) next to the parent you wish to disassociate from the student. You will be asked to confirm this action.
</p>
HTML;

	$help['Students/AssignOtherInfo.php'] = <<<HTML
<p>
	<i>Group Assign Student Info</i> allows you to assign values to any of the Student data fields for a group of students in one action.
</p>
<p>
	First, search for students. From the search result, you can select any number of students. You can select all the students in the list by checking the checkbox in the column headings above the list. After selecting students, fill in any of the Student fields in the box above the student list. Fields that you leave blank will not affect the students you selected. After you have selected each desired student from this list and filled in each desired Other Info field, click the "Save" button at the top of the screen.
</p>
HTML;

	$help['Students/Letters.php'] = <<<HTML
<p>
        Програмата <i>Печатане писма</i> ви позволява да печатате писма до произволен брой студенти.
</p>
<p>
        Първо, потърсете студенти. От намерените студенти можете да изберете произволно число. Можете да изберете и всички, намерени студенти като щракнете върху отметката в реда с названия над списъка. След като сте избрали студентите в полето "Текст на писмото", въведете текста на писмото.
</p>
<p>
        Можете да вмъкнете в текста на писмото някоя информация на студента чрез специални означения:
</p>
<ul>
	<li>
	        <b>Пълно име:</b> __FULL_NAME__
	</li>
	<li>
	        <b>Първо име:</b> __FIRST_NAME__
	</li>
	<li>
	        <b>Второ име:</b> __MIDDLE_NAME__
	</li>
	<li>
	        <b>Фамилно име:</b> __LAST_NAME__
	</li>
	<li>
	        <b>Системен номер:</b> __STUDENT_ID__
	</li>
	<li>
	        <b>Ниво на обучение:</b> __GRADE_ID__
	</li>
</ul>
<p>
        Можете да изберете да отпечатате писмото с етикет за пощенския плик. Етикетът за пощенски плик, ще бъде отпечатан така, че да може да се вижда през прозорчето на плика, когато писмото се сгъне на три. Може да отпечетете повече от едно писмо за студент, ако трябва да му се изпрати на повече от един адрес.
</p>
<p>
        Писмата ще бъдат автоматично изтеглени върху Вашия компютър в PDF формат, когато щракнете бутона "Изпращане".
</p>
HTML;

	$help['Students/General Information'] = <<<HTML
<p><i>Основна информация</i> на студента включва, дата на раждане, ЕГН, народност, пол, родно място и успех. Може да промените всяка информация като щракнете върху това, което искате да промените, и после щракнете бутона "Запазване".</p>
HTML;

	$help['Students/Addresses & Contacts'] = <<<HTML
<p>
	<i>Addresses &amp; Contacts</i> is a display of a student's address and contact information.
</p>
<p>
	A student can have any number of addresses. To add an address, click the "Add a New Address" link and complete the empty fields in the Address box. Finally, click the "Save" button at the top of the screen.
</p>
<p>
	Now, you can add a contact to this address. To do this, complete the contact's name, and again, press the "Save" button.
</p>
<p>
	You can now add more information about this contact by checking the "Custody" and "Emergency" checkboxes, after first clicking on their default value of "No" (cross). Relations marked as having "Custody" of the student receive mailings and relations marked as being "Emergency" contacts can be contacted in the case of an emergency.
</p>
<p>
	You can add other information about this contact, such as their cell phone number, fax number, occupation, workplace, etc. by filling in the title of the new data in the "Description" field and its corresponding value in the "Value" field.
</p>
<p>
	Contacts and information about contacts can be deleted by clicking on the delete icon (-) next to the information to be deleted. (Note: you will be asked to confirm all deletions.) Any information on the screen can be modified by first clicking on the information, then changing its value, and finally clicking the "Save" button at the top of the screen.
</p>
HTML;

	$help['Students/Medical'] = <<<HTML
<p>
	<i>Medical</i> is a display of a student's medical information.
</p>
<p>
	This includes the student's physician, the physician's phone, the student's preferred hospital, any medical comments, whether or not the student has a doctor's note, and comments concerning the doctor's note. To change any of these values, click on the value you want to change, change it, and click the "Save" button at the top of the screen.
</p>
<p>
	You can also add entries for each immunization or physical received by the student as well as any medical alerts such as allergies or illnesses.
</p>
<p>
	To add an immunization, physical, or medical alert, fill in the blank fields at the bottom of the appropriate list, and click the "Save" button at the top of the screen.
</p>
<p>
	To change an immunization, physical, or medical alert, click on the value you want to change, change it, and click the "Save" button at the top of the screen.
</p>
<p>
	To delete an immunization, physical, or medical alert, click on the delete icon (-) next to the item you want to delete. You will be asked to confirm your deletion.
</p>
HTML;

	$help['Students/Enrollment'] = <<<HTML
<p>
	<i>Enrollment</i> can be used to enroll or drop a student from any school. A student can have only one active enrollment record at any time.
</p>
<p>
	To drop a student, change the "Dropped" date to the effective date of the student's drop as well as the reason for his drop. Click the "Save" button at the top of the screen.
</p>
<p>
	Now you can reenroll the student. To do this, select the effective date of the student's enrollment and the reason for his enrollment from the blank line at the bottom of the list. Also, select the school at which the student should be enrolled and click the "Save" button at the top of the screen.
</p>
<p>
	The enrollment and drop dates and reasons can be modified by clicking on the values, changing them to the desired value, and clicking the "Save" button at the top of the screen.
</p>
HTML;

	$help['Students/AdvancedReport.php'] = <<<HTML
<p>
        <i>Сложен отчет</i> е инструмент, с който можете да направите какъвто искате отчет.
</p>
<p>
        Изберете какво искате да видите в отчета чрез щракване върху отметките пред колоните, които искате да се покажат в отчета. Колоните ще се покажат в списъка в реда, в който ги избирате.
</p>
<p>
        За да получите списък на студентите, които имат рождан дан на определена дата, изберете датата, използвайки падащите минюта "Месец на раждане" и "Ден на раждане" в рамката "Намиране на студент".
</p>
HTML;

	$help['Students/AddDrop.php'] = <<<HTML
<p>
        <i>Отчет Добавени / Отпаднали</i> е отчет за всички записани или отпаднали през избран период от време.
</p>
<p>
        За да получите отчет за друг период от време, променете датите в горната част на страницата и щракнете бутона "Показване", вдясно от датите.
</p>
HTML;

	$help['Students/MailingLabels.php'] = <<<HTML
<p>
	<i>Print Mailing Labels</i> allows you to generate mailing labels for a group of students, parents or families.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen.
</p>
<p>
	Then you can select to whom you wish to send the mailings. You can select to print the label with the student's name, using different formats, like "Smith, John Peter" (Last, Given, Middle) or "John Smith" (Given Last).
</p>
HTML;

	$help['Students/StudentLabels.php'] = <<<HTML
<p>
	<i>Print Student Labels</i> allows you to generate labels for Student folders.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen.
</p>
<p>
	Then, select the students &amp; what to print on the label: use the checkboxes on the left hand side of the student list to select the students, and use the options below the "Include on Labels" section to select what information you wish to include. You can select to print the label with the student's name, using different formats, like "Smith, John Peter" (Last, Given, Middle) or "John Smith" (Given Last). You can include the student's Attendance Teacher and Attendance Room on the folder label.
</p>
HTML;

	$help['Students/PrintStudentInfo.php'] = <<<HTML
<p>
	<i>Print Student Info</i> will generate a multi-page report out of the information present in the Student Info tabs.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen.
</p>
<p>
	Then, select the students and the information on the report: use the checkboxes on the left hand side of the student list to select the students, and then, at the top of the screen, check the tabs of the Student Info you would like to include. You can also check "Mailing Labels" to add the mailing information to the report so you may mail it in a window envelope. When you're done, click "Print Info for Selected Students".
</p>
HTML;

	$help['Custom/MyReport.php'] = <<<HTML
<p>
        Програмата <i>Моят отчет</i> ще генерира отчет, съдържащ всички данни за контакт, който може да се изтегли на Вашия компютър във вид на таблица за Excel.
</p>
<p>
        Първо трябва чрез "Намиране на студент" да намерите студенти и да ги изберете.
</p>
<p>
        Този отчет ще достави информация, която можете да разпечатате или по-точно да използвате като електронна таблица с денни за студентите и информацията им за контакт, които бихте могли да използвате в системи за изпращане на писма или друго.
</p>
<p>
        Кракнете върху иконата за изтегляне (изображение на дискета) за да експортирате отчета във файл за Excel.
</p>
HTML;

	$help['Students/StudentFields.php'] = $help['Students/PeopleFields.php'] = $help['Students/AddressFields.php'] = <<<HTML
<p>
        Програмите <i>Студентски данни, Адресни данни и Данни за контакт</i> Ви позволяват да зададете специфични за Вашето училище данни. Тези данни се показват в подстраниците "Обща информация", "Адрес и контакт" или създадените от Вас подстраници на страницата с информация за студента.
</p>
<p>
        Категории данни
</p>
<p>
        RosarioSIS Ви позволява да зададете специфични категории данни, които се показват като подстраници в програмите Студенти и Информация за студент.
</p>
<p>
        Нова категория
</p>
<p>
         За да създадете нова категория, щракнете знака (+) под съществуващите категории. После можете да напишете название на категорията, номер на подреждане (определя в какъв ред се подреждат подстраниците в програмата Информация за студент). Щракнете бутона "Запазване", когато свършите с попълването.
</p>
<p>
        Ново поле данни
</p>
<p>
        Щракнете знака (+) под надписа "Не са намерени Полета". Попълнете "Название" на полето и изберете типа на полето от падащото маню "Тип отговор".
</p>
<ul>
<li>
        Полетата от тип "Падащо меню" създават падащо меню, с което се избира една от няколко възможности. Възможностите за избиране се попълват по една на ред в прозореца с надпис отдолу "Падащо меню/Падащо меню с добавяне/Кодирано падащо меню/Избиране няколко възможности".
</li>
<li>
        Полетата от тип "Падащо меню с добавяне" саздават падащо меню, с което се избира една от няколко възможности, към които може да се добави и нова. Добавяне на нова възможност става с избиране на реда -Редактиране- и щракване на бутон "Запазване". След това можете да напишете Вашата, различна от останалите стойност и да щракнете повторно бутон "Запазване". RosarioSIS ще показва всички, въведени в такова поле нови възможности, за да се избирт и те.
</li>
<li>
        "Падащо меню с редактиране" е подобно на "Падащо меню с добавяне".
</li>
<li>
        Типът "Кодирано падащо меню" създава падащо меню от надписи, по които се избира стойност, но в базата данни се съхранява не надписа, а съответстваща му стойност (код). В прозореца за описване на възможните стойности, на всеки ред се записва, например, "1|Едно". Където "Едно" е надписа, който се показва в падащото маню, а "1" е кода, който се запазва като стойност. Стойностите и съответните им надписи се отделят със знак "|" (вертикална черта).
</li>
<li>
        Типът "Падащо меню за експорт" се дефинира подобно на типа "Кодирано падащо меню". В прозореца за описване на възможните стойности, на всеки ред се пише, например, "1|Едно". Където "Едно" е надписа, който се показва в падащото маню, а "1" е кода, който се запазва при експортиране на данните във външен файл. В базата данни се запазва надписа.
</li>
<li>
        Типът "Избиране няколко възможности" показва няколко отметки, които може да се поставят или премахват в произволна комбинация.
</li>
<li>
        Типът "Текст" позволява попълване на еидн ред текст с максимална дължина 255 символа.
</li>
<li>
        Типът "Дълъг текст" позволяват попълване на няколко реда текст с максимална дължина да 5000 символа.
</li>
<li>
        Типът "Отметка" създава отмета. Когато отметката е поставена, това означава "Да", а когато не е поставена означава "Не".
</li>
<li>
        Типът "Число" показва текстово поле, в което трябва да се попълни само число.
</li>
<li>
        Типът "Дата" създава три падащи менюта за избор на ден, месец и година за дата.
</li>
</ul>
<p>
        Отметката "Необходимо" се поставя ако е задължително данните да бъдат попълнени. При всеки опит за запазване на данните ще се показва напомняне, ако някое необходимо поле данни не е попълнено. Данните ще бъдат запазени само ако всички необходими данни са въведени.
</p>
<p>
        В полето "Подреждане" се попълва число, което определя на кое по ред място да се показва полето данни.
</p>
<p>
        Изтриване на поле
</p>
<p>
        Вие можета да изтриете всяко поле студентски данни или категория данни, просто чрез щракване на бутона "Изтриване" в горния десен ъгъл. Моля, обърнете внимание, че след изтриване ще бъдат изгубени всички данни, ако някое поле и категория данни вече са използвани за въвеждане на данни.
</p>
HTML;

	$help['Students/EnrollmentCodes.php'] = <<<HTML
<p>
	<i>Enrollment Codes</i> allows you to setup your school's enrollment codes. Enrollment codes are used in the Enrollment student screen, and specify the reason the student was enrolled or dropped from a school. These codes apply to all schools system-wide.
</p>
<p>
	The "Rollover default" column sets the code used by the Rollover program when enrolling students in the next school year. There must be exactly one Rollover default enrollment code (of type "Add").
</p>
<p>
	To add an enrollment code, fill in the enrollment code's title, short name, and type in the empty fields at the bottom of the enrollment codes list. Click the "Save" button.
</p>
<p>
	To modify an enrollment code, click on any of the enrollment code's information, change the value, and click the "Save" button.
</p>
<p>
	To delete an enrollment code, click the delete icon (-) next to the enrollment code you want to delete. You will be asked to confirm the deletion.
</p>
HTML;

	// Teacher & Parent & Student.
else :

	$help['Students/General Information'] = <<<HTML
<p><i>Основна информация</i> на студента включва, дата на раждане, ЕГН, народност, пол, родно място и успех.</p>
HTML;

	$help['Students/Addresses & Contacts'] = <<<HTML
<p>
	<i>Addresses &amp; Contacts</i> is a display of a student's address and contact information.
</p>
<p>
	A student can have any number of addresses.
</p>
HTML;

	$help['Students/Enrollment'] = <<<HTML
<p>
	<i>Enrollment</i> is a display of the student's enrollment history.
</p>
HTML;

	$help['Custom/Registration.php'] = <<<HTML
<p>
	<i>Registration</i> will let you register your child's contacts details.
</p>
<p>
	Fill in the form fields with your contacts details and their associated addresses. Then, enter or update the student information.
</p>
<p>
	Once you have completed the forms, click the "Save" button at the bottom of the screen.
</p>
HTML;

endif;


// USERS ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Users/User.php'] = <<<HTML
<p><i>Основна информация</i> на потребителя включва име, потребителско име, парола, профил, училище, имейл адрес и телефонен номер. Ако сте администратор, може да промените всяка информация като щракнете върху това, което искате да промените, направите промяна и после щракнете бутона "Запазване". Можете да изтриете потребителя като щракнете върху бутона "Изтриване" и потвърдите изтриването. Забележете, че не трябва да изтривате преподавател, който е провжда поне един курс, защото името на преподавателя трябва да остане да се вижда в информацията за студентите.</p>
HTML;

	$help['Users/User.php&staff_id=new'] = <<<HTML
<p>
        Програмата <i>Добавяне потребител</i> Ви позволява да добавите потребител в системата. Той може да е администратор, преподавател или родител. Просто попълнете: трите имена на потребителя, потребителското му име и паролата, имейл адреса и телефона, и щрекнете бутона "Запазване".
</p>
HTML;

	$help['Users/AddStudents.php'] = <<<HTML
<p>
	<i>Associate Students with Parents</i> allows you to associate students to parents.
</p>
<p>
	Once a parent's account has been set up, their children must be associated to their account with this program. If you have not already chosen a user earlier in your session, select a user by using the "Find a User" Search screen. Next, search for a student to add to the user's account. From the search result, you can select any number of students. You can select all the students in the list by checking the checkbox in the column headings above the list. After you have selected each desired student from this list, click the "Add Selected Students" button at the top of the screen.
</p>
<p>
	At any time after a user has been selected, you can see the students already associated with that user. These students are listed to the top of the student search screen / search results. These students can be disassociated from this user by clicking the delete icon (-) next to the student you wish to disassociate from the user. You will be asked to confirm this action.
</p>
HTML;

	$help['Users/Preferences.php'] = <<<HTML
<p>
        Програмата <i>Моите предпочитания</i> ще Ви позволи да настроите RosarioSIS по свой личен вкус. Можете също да промените своята парола и да настроите RosarioSIS да показва информация, важна за Вашата работа.
</p>
<p>
        Подстраница Настройки изглед
</p>
<p>
        ви дава възможност да изберете предпочитана от Вас тема (набора от цветове) на RosarioSIS, а в избраната тема - Отбелязващия цвят. Във Формат на датата можете да изберете дали месеците да се показват като "януари", "яну" или "01". Отметката Изключване съобщения при влизане се поставя за да не се показват съобщения в Портала (първата страница след влизане), като съобщения за отсъствие на учител, the new discipline Referrals &amp; the Food Service balance alerts.
</p>
<p>
        Подстраница Списъци студенти
</p>
<p>
        С "Подреждане" можете да изберете списъците на студентите дали да се показват подредени по име или по степен на обучение и име.
        "Тип файл за експорт" може да бъде с Разделител табулатор, който е подходящ за отваряне с Excel; CSV файл (с разделител запетая), подходящ за OpenOffice/LibreOffice или XML файл. "Формат на дати при експорт" позволява да изберете формата на датите при експортиране с щракване на иконата за експортиране. Отметката "Показване екран търсене студенти" трябва да е винаги сложена, освен ако не се цели друго.
</p>
<p>
        Подстраница Парола
</p>
<p>
        Ще Ви позволи да смените паролата си. Въведете сегашната парола и новата парола два пъти и щракнете бутон "Запазване".
</p>
<p>
        Подстраница Студентски данни
</p>
<p>
        Двете колони от отметки Ви позволяват да изберете кои полета за данни на студенти да се показват на страниците "Търсене студент" и "Разширен изглед". Можете да слагате и премахване отметки, толкова често, колкото се налага, за да промените какви данни за студентите да виждате в списъците.
</p>
HTML;

	$help['Users/Profiles.php'] = <<<HTML
<p>
	<i>User Profiles</i> helps you configure how the users access to the information, and if they can modify it.
</p>
<p>
	RosarioSIS comes with four groups as profiles: Administrator, Teacher, Parent &amp; Student. The Administrator Profile has the most permissions, and the other profiles are restricted as appropriate. Please note that teachers are limited in access to the students scheduled in their classes, and that parents can only see the information of thier children, and that students can only see their personal information.
</p>
<p>
	If you click on one of the Profiles, you will see the Permissions Page. This page shows to which page(s) the profile has access to READ (Can Use) or to WRITE (Can Edit) the information on that particular page.
</p>
<p>
	When you uncheck "Can Edit", the users belonging to the profile will see the program in the menu and will see data on the page when clicking on it. They will NOT be able to change any of that information on that page. When you uncheck "Can Use" on a particular program, then users belonging to the profile will not see the program in the menu on the left hand side, and will not be able to access it.
</p>
<p>
	Administrator Profile
</p>
<p>
	Administrators have access to almost all pages, to read or to write information on that page. By default, they cannot see the "Comments" tab in the Student Info program, but can access and can modify all other pages.
</p>
<p>
	You can restrict the User Profile edition if you uncheck the <i>Users > User Info > General Info > User Profile</i> checkbox. Administrators will then loose the ability to assign user profiles (and permissions).
</p>
<p>
	You can restrict the User Schools edition if you uncheck the <i>Users > User Info > General Info > Schools</i> checkbox. Administrators will then loose the ability to add or remove schools to/from a user.
</p>
<p>
	Teacher Profile
</p>
<p>
	Teachers have the permission to access a more limited set of pages within RosarioSIS, and their ability to edit those pages is more restricted. By default, teachers cannot change any data about a student EXCEPT for the Comments tab.
</p>
<p>
	Parent Profile
</p>
<p>
	Parents are even more limited. Parents only have access to information that is specifically of interest to them, the student's demographic information, attendance and grades.
</p>
<p>
	Add a User Profile
</p>
<p>
	For security reasons, it is recommended to add an "admin" profile to "Administrator" in order to limit the permissions of administrators. It should not be necessary for ALL administrators to be able to Add Schools, Copy Schools, change Marking Periods, or change Grading Scales, etc. Once the configuration of the school is done, changes to the configuration by unknowledgable users can be a source of troubles or dysfunctions.
</p>
<p>
	To add a new Profile, type its name in the "Title" text box and then select its "Type" of profile. Finally, click the "Save" button in the upper part of the screen.
</p>
<p>
	Setting Permissions
</p>
<p>
	To configure the permissions your users should have, it is a good practice to login with a test user belonging to the profile and figure out what can be accessed. Less is more!
</p>
HTML;

	$help['Users/Exceptions.php'] = <<<HTML
<p>
        Програмата <i>Позволения на потребителите</i> Ви позволява да забраните или позволите достъпа на всеки потребител до различните програми.
</p>
<p>
        За да промените позволенията на отделни потребители първо трябва да намерите потребители и в техния списък да щракнете върху отделни имена. To assign privileges to a user, first select a user by searching and clicking on his name on the list. Then, use the checkboxes to define which programs the user can use and which programs he can use to modify information. If a user cannot use a particular program, the program will not be displayed on his menu. If he can use the program, but can't edit information with the program, the program will display the data, but won't let him change it. After you have completed the program checkboxes, click the "Save" button to save the user's permissions.
</p>
HTML;

	$help['Users/UserFields.php'] = <<<HTML
<p>
        Програмата <i>Потребителски данни</i> Ви позволява да добавите нови полета за данниa и подстраници към страницата с информация за потребителя.
</p>
<p>
        Категории данни за потребител
</p>
<p>
        RosarioSIS Ви позволява да добавяте категории, които ще се показват като подстраници с данни на потребител в програмата Потребител &gt; Данни на потребител. За да създадете нова подстраница щракнете знага (+) под колоната със съществуващите категории.
</p>
<p>
        Нова категория
</p>
<p>
	You can now type in the name of the new Category in the "Title" field(s) provided. Add a sort order (order in which the tabs will appear in the User Info program), and the number of columns the tab will display (optional). Click "Save" when you have finished.
</p>
<p>
	Add a new Field
</p>
<p>
	Click on the "+" icon below the "No User Fields were found" text. Fill in the Field Name field(s), and then choose what type of field you wish with the "Data Type" pull-down.
</p>
<ul>
<li>
	"Pull-Down" fields create menus from which you can select one option. To create this type of field, click on "Pull-Down" and then add your options (one per line) in the "Pull-Down/Auto Pull-down/Coded Pull-Down/Select Multiple from Options" text box.
</li>
<li>
	"Auto Pull-Down" fields create menus from which you can select one option, and add options. You add options by selecting the "-Edit-" option in the menu choices and click "Save". You can then edit the field by removing the red "-Edit-" from the field, entering the correct information. RosarioSIS gets all the options that have been added to this field to create the pull-down.
</li>
<li>
	"Edit Pull-Down" fields are similar to Auto Pull-Down fields.
</li>
<li>
	"Coded Pull-Down" fields are created by adding options to the large text box respecting the following pattern: "option shown"|"option stored in database" (where | is the "pipe" character). For example: "Two|2", where "Two" is displayed on screen to the user, or in a downloaded spreadsheet, and "2" is stored in the database.
</li>
<li>
	"Export Pull-Down" fields are created by adding options to the large text box respecting the same pattern used for "Coded Pull-Down" fields ("option shown"|"option stored in database"). For example: "Two|2", where "Two" is displayed on screen to the user, and "2" is the value in a downloaded spreadsheet, but "Two" is stored in the database.
</li>
<li>
	"Select Multiple from options" fields create multiple checkboxes to choose one or more options.
</li>
<li>
	"Text" fields create alphanumeric text fields with a maximum capacity of 255 characters.
</li>
<li>
	"Long Text" fields create large alphanumeric text boxes with a maximum length of 5000 characters.
</li>
<li>
	"Checkbox" fields create checkboxes. When checked it means "yes" and when un-checked "no".
</li>
<li>
	"Number" fields create text fields that stores only numeric values.
</li>
<li>
	"Date" field creates pull-downs fields to pick a date from.
</li>
</ul>
<p>
	The "Required" checkbox, if checked, will make that field required so an error will be displayed if the field is empty when saving the page.
</p>
<p>
	The "Sort Order" determines the order in which the fields will be displayed in the User Info tab.
</p>
<p>
	Delete a field
</p>
<p>
	You can delete any User field or Category simply by clicking on the "Delete" button in the upper right corner. Please note that you will lose all your data if you delete an already used field or category.
</p>
HTML;

	$help['Users/TeacherPrograms.php&include=Grades/InputFinalGrades.php'] = <<<HTML
<p>
	<i>Teacher Programs: Input Final Grades</i> allows you to enter quarter, semester or progress period grades for all the selected teacher's students in the current period. By default, this program will list the students in the selected teacher's first period class for the current quarter. You can alter the period by changing the period pull-down menu at the top of the screen. Also, you can alter the quarter by changing the marking period pull-down menu on the left frame. Furthermore, you can select the current semester or progress period by changing the marking period pull-down menu at the top of the screen to the desired marking period.
</p>
<p>
	Once you are in the correct marking period, you can enter student grades by selecting the earned grade for each student and entering comments as desired. Once all the grades and comments have been entered, click the "Save" button at the top of the screen.
</p>
<p>
	If the selected teacher is using the Gradebook, you can have RosarioSIS calculate each student's quarter grades by clicking on the "Get Gradebook Grades" link at the top of the list. Clicking this link will automatically save each student's grades and refresh the list.
</p>
<p>
	If the marking period you are in is a Progress Period, when clicking on the "Get Gradebook Grades" link, the gades taken in account will be limited to the one for which the Assignment Due Date is comprised within the Progress Period, or the ones with no Due Dates.
</p>
HTML;

	$help['Users/TeacherPrograms.php&include=Grades/Grades.php'] = <<<HTML
<p>
	<i>Teacher Programs: Gradebook Grades</i> allows you to consult and modify any grade of the students gradebooks. You can select the teachers classes using the course period pull-down in the upper left corner of the page. The Gradebook Grades of the class will be diplayed. As an administrator, you can pick any individual student, or totals for assignment categories, or all students for any or all assignments. The "All" pull-down menu lets you select an assignment category, or alternatively you can use the tabs on the top the grades listing. The "Totals" pull-down menu lets you select a particular assignment or the "total" of all assignments.
</p>
HTML;

	$help['Users/TeacherPrograms.php&include=Grades/AnomalousGrades.php'] = <<<HTML
<p>
	<i>Teacher Programs: Anomalous Grades</i> is a report that helps a teacher to keep track of missing, inappropriate and excused grades. The grades appearing on this report are NOT problematic, but a teacher MAY wish to review them. Missing, excused &amp; negative grades, or grades that are extra credit or that exceed 100% are shown. The "Problem" column indicates the reason why the grade is anomalous.
</p>
<p>
	You can select the teachers classes using the course period pull-down in the upper left corner of the page. You can also select which type of "anomalous" grades you wish the report to display.
</p>
HTML;

	$help['Users/TeacherPrograms.php&include=Attendance/TakeAttendance.php'] = <<<HTML
<p>
	<i>Teacher Programs: Take Attendance</i> allows you to enter period attendance for all the selected teacher's students. By default, this program will list the students in the selected teacher's first period class. You can alter the current period by changing the period pull-down menu at the top of the screen to the desired period.
</p>
<p>
	Once you are in the correct period, you can enter attendance by selecting the attendance code corresponding to each student. Once you have entered attendance for all the students, click the "Save" button at the top of the screen.
</p>
HTML;

	$help['Users/TeacherPrograms.php&include=Eligibility/EnterEligibility.php'] = <<<HTML
<p>
	<i>Teacher Programs: Enter Eligibility</i> allows you to enter eligibility grades for all the selected teacher's students. By default, this program will list the students in the selected teacher's first period class. You can alter the current period by changing the period pull-down menu in the left frame to the desired period.
</p>
<p>
	Once you are in the correct period, you can enter eligibility grades by selecting the eligibility code corresponding to each student. Once you have entered eligibility for all the students, click the "Save" button at the top of the screen.
</p>
<p>
	If the selected teacher is using the Gradebook, you can have RosarioSIS calculate each student's eligibility grades by clicking on the "Use Gradebook Grades" link at the top of the list. Clicking this link will automatically save each student's eligibility grades and refresh the list.
</p>
<p>
	You must enter eligibility each week during the timeframe specified by your school's administration.
</p>
HTML;

endif;


// SCHEDULING ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Scheduling/Schedule.php'] = <<<HTML
<p>
	<i>Student Schedule</i> allows you to modify a student's course schedule.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen. You can search for students who have requested a specific course or request by clicking on the "Choose" link next to the search options "Course" and "Request" respectively and choosing a course from the popup window that appears.
</p>
<p>
	To add a course to the student's schedule, click on the "Add a Course" link next to the add icon (+) and select a course from the popup window that appears. The screen will automatically refresh to show the course addition.
</p>
<p>
	To drop an existing course, select the "Dropped" date next to the course you want to drop from the student's schedule.
	If you select a "Dropped" date prior to the "Enrolled" date, the course will be removed and you will be asked to confirm the removal of the associated absences and grades records.
</p>
<p>
	To change the course period of a course for the student, click on the "Period - Teacher" of the course you want to change and select the new course period. You can also change the term in the same fashion.
</p>
<p>
	All deletions, and modifications to a student's schedule are not made permanent until you click the "Save" button at the top of the screen.
</p>
HTML;

	$help['Scheduling/Requests.php'] = <<<HTML
<p>
	<i>Student Requests</i> allows you to specify which courses a student intends to take in the next school year. These requests are used by the Scheduler when filling a student's schedule.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen. You can search for students who have requested a specific request by clicking on the "Choose" link next to the search option "Request" and choosing a course from the popup window that appears.
</p>
<p>
	You can add a request by selecting the course you want to add from under the corresponding subject heading. You can add requests from each subject in the same way, or you can add another request in the same subject by clicking on the on the subject name in the last line of the list with the add icon (+). Doing this will cause another set of request pull-down menus to appear under the subject heading. Once you have added all the desired requests, click the "Save" button at the top of the screen.
</p>
<p>
	When you save the student's requests, the Student Requests program will run the Scheduler without saving the schedule for the current student to notify you of any conflicts. The Scheduler output will also tell you if any course requested has zero available seats. If a request could not be met, you can change the requests accordingly to ensure complete scheduling. You will also be given the option to schedule the student with the requests you entered.
</p>
<p>
	Furthermore, when you have saved the student's requests, you will have the option to specify a teacher or period and to exclude a teacher or period. To do this, select the teacher or period from the "With" and "Without" pull-down menus respectively. Once you have made all the desired modifications, click the "Save" button. You can also delete a request that you entered by clicking on the delete icon (-).
</p>
HTML;

	$help['Scheduling/MassSchedule.php'] = <<<HTML
<p>
	<i>Group Schedule</i> allows you to schedule a group of students into one or more courses in one action.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen. You can search for students who have requested a specific course or request by clicking on the "Choose" link next to the search options "Course" and "Request" respectively and choosing a course from the popup window that appears.
</p>
<p>
	Select a course period to add by clicking the "Choose a Course" link at the top of the screen and choosing the course from the popup screen that appears. The window will close and the course period will now show on the page.
</p>
<p>
	Repeat the last step to select and add another course period.
</p>
<p>
	Then, select the proper "Start Date" (the date that the students will first attend this course period), and the appropriate "Marking Period".
</p>
<p>
	From the search result, you can select any number of students. To select all the students in the list, check the checkbox in the column headings above the list. After you have selected each desired student from this list, click the "Add Courses to Selected Students" button at the top of the screen.
</p>
HTML;

	$help['Scheduling/MassRequests.php'] = <<<HTML
<p>
	<i>Group Requests</i> allows you to add a request to a group of students in one action.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen. You can search for students who have requested a specific request by clicking on the "Choose" link next to the search option "Request" and choosing a course from the popup window that appears. Notice that you can search for students who already have a certain request or are in a certain activity. This can be useful since you can add a laboratory course request to all students who requested chemistry. Or you can add a P.E. course request to all students in Boy's Basketball.
</p>
<p>
	Select a course to be added as a request by clicking the "Choose a Course" link at the top of the screen and choosing the course from the popup screen that appears.
</p>
<p>
	Then, select the proper "With" or "Without" Teacher, and the correct Period.
</p>
<p>
	From the search result, you can select any number of students. To select all the students in the list, check the checkbox in column headings above the list. After you have selected each desired student from this list, click the "Add Request to Selected Students" button at the top of the screen. If you have not yet chosen a course to add as a request, you must do that before you click this button.
</p>
HTML;

	$help['Scheduling/MassDrops.php'] = <<<HTML
<p>
	<i>Group Drops</i> allows you to drop a course for a group of students in one action.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen. You can search for students who have requested a specific course or request by clicking on the "Choose" link next to the search options "Course" and "Request" respectively and choosing a course from the popup window that appears.
</p>
<p>
	Select a course period to be dropped by clicking the "Choose a Course" link at the top of the screen and choosing the course from the popup screen that appears. The window will close and the course period will now show on the page.
</p>
<p>
	Then, select the proper "Drop Date" (the date that the students will drop this course period), and the appropriate "Marking Period".
</p>
<p>
	From the search result, you can select any number of students. To select all the students in the list, check the checkbox in the column headings above the list. After you have selected each desired student from this list, click the "Drop Course for Selected Students" button at the top of the screen.
</p>
HTML;

	$help['Scheduling/PrintSchedules.php'] = <<<HTML
<p>
	<i>Print Schedules</i> is a utility that allows you to print schedules for any number of students.
</p>
<p>
	You can search for students who requested or are enrolled in a specific course by clicking the "Choose" link next to the "Request" and "Course" search options respectively and choosing a course from the popup window that appears.
</p>
<p>
	Also, you can choose to print the schedules with mailing labels. The schedules will have mailing labels positioned in such a way as to be visible in a windowed envelope when the sheet is folded in thirds. More than one schedule may be printed per student if the student has guardians residing at more than one address.
</p>
<p>
	The schedules will be automatically downloaded to your computer in the printable PDF format when you click the "Create Schedules for Selected Students" button.
</p>
HTML;

	$help['Scheduling/PrintClassLists.php'] = <<<HTML
<p>
	<i>Print Class Lists</i> will allow you to print a report of students in classes. You can narrow the classes by either the Teacher or Subject or Period or Course Period.
</p>
<p>
	First, select the Classes
</p>
<p>
	Selecting a "Teacher" will show all the classes for that one teacher. Selecting a "Subject" will show the classes for that one subject. Selecting a "Period" will show all the classes for that individual period. Selecting a "Course" via the "Choose" link will show that individual course period with one teacher.
</p>
<p>
	Then, on the left hand side of the page, check the columns you would like to see on the list. The fields, in the order you have selected them, will appear in the list at the top of the page.
</p>
<p>
	Finally, select the Classes to List on the report at the bottom of the page and click "Create Class Lists for Selected Course Periods".
</p>
<p>
	The Class Lists with the selected columns will be generated as a PDF document that can be printed or sent by email.
</p>
HTML;

	$help['Scheduling/PrintRequests.php'] = <<<HTML
<p>
	<i>Print Requests</i> is a utility that allows you to print requests sheets for any number of students.
</p>
<p>
	You can search for students who requested a specific course by clicking the "Choose" link next to the "Request" search option and choosing a course from the popup window that appears.
</p>
<p>
	Also, you can choose to print the requests sheets with mailing labels. The requests sheets will have mailing labels positioned in such a way as to be visible in a windowed envelope when the sheet is folded in thirds. More than one request sheet may be printed per student if the student has guardians residing at more than one address.
</p>
<p>
	The request sheets will be automatically downloaded to your computer in the printable PDF format when you click the "Submit" button.
</p>
HTML;

	$help['Scheduling/ScheduleReport.php'] = <<<HTML
<p>
	<i>Schedule Report</i> is a report that shows the students who are scheduled into each course, the students who requested the course but weren't successfully scheduled into it, and the number of requests, open seats, and total seats in each course.
</p>
<p>
	To navigate through this report, first click on any one of the subjects. You will now see each course in that subject as well as the number of requests for that course and open and total seats available for that course. If you choose a course by clicking on it, you will see a list of the course periods, and the requests, open, and total seats numbers will be broken down by each period. Here, you can also see a list of students scheduled in the course or a list of students who requested the course but weren't scheduled into it by clicking the "List Students" and "List Unscheduled Students" links respectively.
</p>
<p>
	If you select a course period by clicking on it, you can display a list of students scheduled in the course or a list of students who requested the course but weren't scheduled into it by clicking the "List Students" and "List Unscheduled Students" links respectively.
</p>
<p>
	At any point after selecting a subject, you can navigate backwards by clicking on the links that appear in the grey bar at the top of the screen.
</p>
HTML;

	$help['Scheduling/RequestsReport.php'] = <<<HTML
<p>
	<i>Requests Report</i> is a report that shows the number of students who requested each course and the number of total seats in that course. The courses are grouped by subject.
</p>
<p>
	This report is useful for creating the master schedule since it helps you determine the number of course periods necessary for each course due to demand for the course.
</p>
HTML;

	$help['Scheduling/UnfilledRequests.php'] = <<<HTML
<p>
	<i>Unfilled Requests</i> is a report of course requests unfilled for a group of students.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen.
</p>
<p>
	The report shows the student information along with the request unfilled details (teacher and period requested) and the number of sections or course periods which have been setup for the course (in the Scheduling &gt; Courses program). You can also check the available seats by checking "Show Available Seats" at the top of the screen.
</p>
<p>
	Clicking on the student's name will redirect you to the Student Requests program.
</p>
HTML;

	$help['Scheduling/IncompleteSchedules.php'] = <<<HTML
<p>
	<i>Incomplete Schedules</i> is a report of students who have no class scheduled in a particular period.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen. You can search for students who have requested a specific course or request by clicking on the "Choose" link next to the search options "Course" and "Request" respectively and choosing a course from the popup window that appears.
</p>
<p>
	Then, the students in the list are not scheduled in the periods corresponding to the columns where they have red "X" icons. If the period column has a green "tick" icon, the student have a class scheduled in that period. A red "X" icon therefore indicates a free, unscheduled period that can be scheduled.
</p>
HTML;

	$help['Scheduling/AddDrop.php'] = <<<HTML
<p>
	<i>Add / Drop Report</i> is a report of students who have had classes added to, or dropped from, their schedule during the timeframe selected. You can select a different timeframe by changing the dates at the top of the screen, and then clicking the "Go" button. The report shows student information along with the Course, Course Period, Enrolled and Dropped dates. You can export the report to a spreadsheet using the "Download" icon.
</p>
HTML;

	$help['Scheduling/Courses.php'] = <<<HTML
<p>
        Програмата <i>Курсове</i> Ви позволява да настроите курсовете във Вашето училище. Име три нива на организация на курсовете: Предмети, Курсове и Части.
</p>
<p>
        За да добавите, курсов елемент в което и да е ниво, щракнете знака (+) в колоната, в която ще добавите елемент. После попълнете информацията, изисквана в полетата над списъка от курсове и щрекнете бутон "Запазване".
</p>
<p>
        За да промените, който и да е елемент, щрекнете върху елемента, който искате да промените и върху информацията, която искате да промените в сивата област над списъка курсове. Променете информацията и щракнете бутона "Запазване".
</p>
<p>
        Накрая, за да изтриете нещо, го изберете от списъка и щракнете бутона "Изтриване". Ще бъдете запитани за потвърждение.
</p>
HTML;

	$help['Scheduling/Scheduler.php'] = <<<HTML
<p>
        Програмата <i>Съставяне разписания</i> съставя schedules every student at your school according to the requests entered for them.
</p>
<p>
	You first must confirm the Scheduler run. Here, you can also choose to run the scheduler in "Test Mode" which will not save the student schedules.
</p>
<p>
	Once the scheduler has run, which could take several minutes, it will notify you of any conflicts. The Scheduler output will also tell you if any course requested has zero available seats. If a request could not be met, you can change the requests accordingly to ensure complete scheduling. Once the schedules have been saved, you will be given the option to view the Schedule Report.
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'teacher' ) :

	$help['Scheduling/Schedule.php'] = <<<HTML
<p>
	<i>Schedule</i> is a display of the student's course schedule.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen.
</p>
HTML;

	// Parent & Student.
else :

	$help['Scheduling/Schedule.php'] = <<<HTML
<p>
	<i>Schedule</i> is a display of your child's course schedule.
</p>
HTML;

endif;


// GRADES ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Grades/ReportCards.php'] = <<<HTML
<p>
	<i>Report Cards</i> is a utility that allows you to print report cards for any number of students.
</p>
<p>
	You can search for students who are enrolled in a specific course by clicking the "Choose" link next to the "Course" search option and choosing a course from the popup window that appears. You can also limit your search based on weighted/unweighted GPA, class rank, and letter grade by filling in the upper and lower bounds of the GPA and class rank range and checking the desired letter grade checkboxes. For example, this allows you to search for all students in the top ten of their class, all students who are failing, or all students who have failed at least one course in the marking periods selected.
</p>
<p>
	Also, you can choose to print the report cards with mailing labels. The report cards will have mailing labels positioned in such a way as to be visible in a windowed envelope when the sheet is folded in thirds. More than one report card may be printed per student if the student has guardians residing at more than one address.
</p>
<p>
	Before printing the report cards, you must select which marking periods to display on the report card by checking desired marking period checkboxes.
</p>
<p>
	The report cards will be automatically downloaded to your computer in the printable PDF format when you click the "Create Report Cards for Selected Students" button.
</p>
HTML;

	$help['Grades/HonorRoll.php'] = <<<HTML
<p>
	<i>Honor Roll</i> allows you to create honor roll lists or certificates.
</p>
<p>
	The Honor Roll GPA values are setup via the Grades &gt; Grading Scales program.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen. You can search for students who qualify for "Honor" or "High Honor" by checking the respective checkboxes. You can also search for students who have requested a specific course by clicking on the "Choose" link next to the search option "Course" and choosing a course from the popup window that appears.
</p>
<p>
	Then, you can generate "Certificates" or a "List" of the qualifiers by selecting the right option at the top of the screen. The Certificate text can be personalized by editing it. Finally, click the "Create Honor Roll for Selected Students" button to generate the Honor Roll certificates or the List of qualifiers in a PDF format to print or email. Alternatively, you can click the "Download" icon to generate a spreadsheet of this data.
</p>
HTML;

	$help['Grades/CalcGPA.php'] = <<<HTML
<p>
	<i>Calculate GPA</i> calculates and saves the GPA and class rank of each student in your school based upon their grades.
</p>
<p>
	You must confirm your intention to calculate GPA. Here, you can also specify for which marking period the GPA is calculated. The GPA is calculated using the "Base grading scale" specified in the school setup.
</p>
<p>
	The Calculate GPA program calculates the weighted GPA earned per course by multiplying the GPA value of the grade earned by the GPA multiplier of the course weight. Then, it divides that value by the number you specified as the base for your weighted scale. For unweighted GPA, the Calculate GPA program simply takes the GPA value of the grade the student earned. After finding the GPA points earned for each course, the program averages these values to determine the student's to-date GPA. It then sorts these values to determine the class rank. If more than one student has the same GPA, they will share a position in class rank.
</p>
HTML;

	$help['Grades/Transcripts.php'] = <<<HTML
<p>
	<i>Transcripts</i> is a utility that allows you to print transcripts for any number of students.
</p>
<p>
	You can search for students who are enrolled in a specific course by clicking the "Choose" link next to the "Course" search option and choosing a course from the popup window that appears. You can also limit your search based on weighted/unweighted GPA, class rank, and letter grade by filling in the upper and lower bounds of the GPA and class rank range and checking the desired letter grade checkboxes. For example, this allows you to search for all students in the top ten of their class, all students who are failing, or all students who have failed at least one course in the marking periods selected.
</p>
<p>
	Before printing the transcripts, you must select which marking periods to display on the transcript by checking desired marking period checkboxes.
</p>
<p>
	The transcripts will be automatically downloaded to your computer in the printable PDF format when you click the "Submit" button.
</p>
HTML;

	$help['Grades/TeacherCompletion.php'] = <<<HTML
<p>
	<i>Teacher Completion</i> is a report that shows which teachers have not entered grades for any given marking period.
</p>
<p>
	The red checks indicate that a teacher has failed to enter the current marking period's grades for that period.
</p>
<p>
	You can select the current quarter, semester from the pull-down menu at the top of the screen. To change the current quarter, change the marking period pull-down menu on the left frame. You can also show only one period by choosing that period from the period pull-down menu at the top of the screen.
</p>
HTML;

	$help['Grades/GradeBreakdown.php'] = <<<HTML
<p>
	<i>Grade Breakdown</i> is a report that shows the number of each grade that a teacher gave.
</p>
<p>
	You can select the current quarter, semester from the pull-down menu at the top of the screen. To change the current quarter, change the marking period pull-down menu on the left frame.
</p>
HTML;

	$help['Grades/StudentGrades.php'] = <<<HTML
<p>
	<i>Student Grades</i> allows you to view the grades earned by a student.
</p>
<p>
	You can search for students who are enrolled in a specific course by clicking the "Choose" link next to the "Course" search option and choosing a course from the popup window that appears. You can also limit your search based on weighted/unweighted GPA, class rank, and letter grade by filling in the upper and lower bounds of the GPA and class rank range and checking the desired letter grade checkboxes. For example, this allows you to search for all students in the top ten of their class, all students who are failing, or all students who have failed at least one course in the marking periods selected.
</p>
HTML;

	$help['Grades/FinalGrades.php'] = <<<HTML
<p>
	<i>Final Grades</i> allows you to view the final grades earned by any number of students.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen.
</p>
<p>
	Then, select what you would like to include on the Grade List: "Teacher", "Comments" and "Year-to-date Daily Absences" are pre-checked by default. If you wish to include other columns, please check them. Do not forget to check the Marking Periods to show on the Grade List.
</p>
<p>
	From the search result, you can select any number of students. You can select all the students in the list by checking the checkbox in the column headings above the list.
</p>
<p>
	Finally, click the "Create Grade Lists for Selected Students" button.
</p>
<p>
	Please note that if you select only ONE marking period, you will be able to delete Final Grades by clicking the (-) icon on the left hand side of the page, and then confirm your choice.
</p>
HTML;

	$help['Grades/GPARankList.php'] = <<<HTML
<p>
	<i>GPA / Class Rank List</i> is a report that shows the unweighted GPA, weighted GPA, and class rank of each student at your school.
</p>
<p>
	As with any list in RosarioSIS, you can sort by any value displayed by clicking on the coresponding column heading. For example, you can sort by grade by clicking on the "Grade" column heading. Similarly, you can sort by unweighted GPA by clicking on the "Unweighted GPA" column heading.
</p>
HTML;

	$help['Grades/ReportCardGrades.php'] = <<<HTML
<p>
	<i>Grading Scales</i> allows you to setup your school's report card grades. Report card grades are used in the Input Final Grades program by teachers and in most of the Grades reports. Report card grades include letter grades as well as grade comments that a teacher can choose from when entering grades.
</p>
<p>
	To add a report card grade, fill in the grade's title, GPA value, and sort order in the empty fields at the bottom of the grades list and click the "Save" button.
</p>
<p>
	To add a comment, enter the new comment's title in the empty field at the bottom of the comments list.
</p>
<p>
	To modify either type of grade, click on any of the grade's information, change the value, and click the "Save" button.
</p>
<p>
	To delete either type of grade, click the delete icon (-) next to the grade you want to delete. You will be asked to confirm the deletion.
</p>
<p>
	To add or edit a grade scale, first click the plus icon (+) tab. For each grade scale you should adjust their scale value, minimum passing grade (minimum grade to earn credits), along with various honor roll minimum GPAs.
</p>
HTML;

	$help['Grades/ReportCardComments.php'] = <<<HTML
<p>
	<i>Report Card Comments</i> allows you to setup your school's report card comments, for each course or for all courses.
</p>
<p>
	The "All Courses" tab is where you create Comments that apply to All Courses, for example to grade conduct, or a quality of the students that all courses share in common. The (+) tab is where you add other comments, specifically course-specific comment tabs and comments.
</p>
<p>
	The "General" tab contains the comments that are added when entering students' grades in the "Input Final Grades" program. Teachers can use the pull-down menu under the "General" tab to add one or more pre-designed comments to the report card. Please note that RosarioSIS has placeholder symbols that can be used in these comments: "^n" will be replaced by the student's first name, while "^s" will be replaced a gender-appropriate pronoun. For example, the comment "^n Comes to ^s Class Unprepared" will be translated to "John Comes to his Class Unprepared" in John Smith's report card.
</p>
<p>
	The "All Courses" tab allows you to create Comments that apply to All Courses. Enter the Comment name and associate it to a "Code Scale" (created in the "Comment Codes" program) using the pull-down menu. The result will be a new column for the comment in the "Input Final Grades" program, under the "All Courses" tab. The column will display a pull-down menu with the comment codes of the scale associated.
</p>
<p>
	To create course-specific comments, first select a course by using the pull-downs at the top of the page. Then click on the tab with the (+) icon to create a Comment Category. Click "Save" and then a new tab with the category name will appear. There you will be able to add individual comments, one-by-one, and to associate them to a "Code Scale" (created in the "Comment Codes" program) using the pull-down menu. The result will be a new tab in the "Input Final Grades" program. The tab will be named after the comment category and will display one column for each of the comments under that category. The columns will display a pull-down menu with the comment codes of the scales associated.
</p>
HTML;

	$help['Grades/ReportCardCommentCodes.php'] = <<<HTML
<p>
	<i>Comment Codes</i> allows you to create comment scales that will generate pull-down menus of grading codes in the Input Final Grades program. Then, those codes will be displayed with their associated comment in the Report Card.
</p>
<p>
	To create a new Comment Scale, click on the tab with the (+) icon. Give a name to your comment scale, add an optional comment and then click "Save". A new tab will appear with the name of your new Comment Scale. Click on the tab of the comment scale to select it and then you will be able to add, one by one, the comment scale codes by filling in their respective "Title" (enter here the code), "Short Name" and "Comment" (entry / code legend that will appear on the report card).
</p>
HTML;

	$help['Grades/EditHistoryMarkingPeriods.php'] = <<<HTML
<p>
	<i>History Marking Periods</i> allows you to create marking periods for past years grades.
</p>
<p>
	Use this program first if you want to enter past years grades into RosarioSIS that were given before installing RosarioSIS, or if you want to enter grades for a student transferred to your school. Once the history marking period is added, you will be able to select it via the Edit Student Grades program.
</p>
<p>
	Please note that the "Grade Post Date" field determines the order of the history marking periods when entering grades or generating the Transcript and should therefore be entered properly. Also, each history marking period needs to be created only once.
</p>
HTML;

	$help['Grades/EditReportCardGrades.php'] = <<<HTML
<p>
	<i>Edit Student Grades</i> allows you to enter the past years grades of a student or the grades of a transferred student.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen.
</p>
<p>
	Now, for the selected student, add the marking period (typically an history marking period you have created via the History Marking Periods program) selecting it in the "New Marking Period" pull-down menu. Then, enter the grade level for the selected student and click "Save".
</p>
<p>
	You can add the student grades via the "Grades" tab. Enter the "Course Name" and the grades associated, then click "Save". Please note that you can use a custom grade scale for the GPA calculation.
</p>
<p>
	RosarioSIS needs credits to calculate the GPA. Please check the "Credits" tab and adjust the credits for each course as needed.
</p>
HTML;

	$help['Grades/MassCreateAssignments.php'] = <<<HTML
<p>
	<i>Mass Create Assignments</i> allows you to create assignments for multiple courses at once. There are two tiers involved with assignments: assignment types and assignments.
</p>
<p>
	You will probably have assignment types called "Homework", "Tests", and perhaps "Quizzes". Assignment types are set for every period of a given course.
</p>
<p>
	To add an assignment type, click on the Add icon (+) in the assignment type column. Then, fill in the information in the fields above the list of assignment types. Select the Courses in the list at the bottom of the screen and click the "Create Assignment Type for Selected Courses" button.
</p>
<p>
	If you set the "Percent of Final Grade", teachers will see it only if they have checked the "Weight Grades" checkbox in their Gradebook Configuration.
</p>
<p>
	To add an assignment, click on the desired assignment type in the assignment type column. Then, fill in the information in the fields above the list of assignment types. Select the Course Periods in the list at the bottom of the screen and click the "Create Assignment for Selected Course Periods" button.
</p>
<p>
	If you enter 0 "Points", this will let you give Students Extra Credit.
</p>
<p>
	If you check "Enable Assignment Submission", Students (or Parents) can submit the assignment (upload a file and/or leave a message). Submissions are opened from the assigned date and until the due date. If no due date has been set, submissions are open until the end of the quarter. Teachers can later consult the submissions in the "Grades" program.
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'teacher' ) :

	$help['Grades/InputFinalGrades.php'] = <<<HTML
<p>
	<i>Input Final Grades</i> allows you to enter quarter, semester or progress period grades for all your students in the current period. By default, this program will list the students in your first period class for the current quarter. You can alter the quarter by changing the marking period pull-down menu on the left frame. Also, you can select the current semester or progress period by changing the marking period pull-down menu at the top of the screen to the desired marking period.
</p>
<p>
	Once you are in the correct marking period, you can enter student grades by selecting the earned grade for each student and entering comments as desired. Once all the grades and comments have been entered, click the "Save" button at the top of the screen.
</p>
<p>
	If you are using the Gradebook, you can have RosarioSIS calculate each student's quarter grades by clicking on the "Use Gradebook Grades" link at the top of the list. Clicking this link will automatically save each student's grades and refresh the list.
</p>
<p>
	If the marking period you are in is a Progress Period, when clicking on the "Get Gradebook Grades" link, the gades taken in account will be limited to the one for which the Assignment Due Date is comprised within the Progress Period, or the ones with no Due Dates.
</p>
HTML;

	$help['Grades/Configuration.php'] = <<<HTML
<p>
	<i>Configuration</i> allows you to configure the gradebook.
</p>
<p>
	You can configure the gradebook to round scores up, down, or normally. Normal rounding would round 19.5 to 20 but 19.4 to 19.
</p>
<p>
	You can also configure the score breakoff points for each letter grade. For example, if you set the score breakoff points for A+, A, and A- to 99, 91, and 90 respectively, a student with 99% to 100% would have an A+, another student with a 91% to 98% would have an A, and a student with a 90% would have an A-. The score breakoff point for F should probably be 0.
</p>
<p>
	Finally, you can also configure the final grading percentages of each semester. These values are used when averaging the quarter grades to calculate the semester grade.
</p>
HTML;

	$help['Grades/Assignments.php'] = <<<HTML
<p>
	<i>Assignments</i> allows you to setup your assignments. There are two tiers involved with assignments: assignment types and assignments.
</p>
<p>
	You will probably have assignment types called "Homework", "Tests", and perhaps "Quizzes". Assignment types are set for every period on which you teach any given course. So, if you teach Algebra on 1st and 3rd period, you will have to add assignment types to only one of these periods.
</p>
<p>
	To add an assignment type or an assignment, click on the Add icon (+) in the column corresponding to what you want to add. Then, fill in the information in the fields above the list of assignments / types and click the "Save" button.
</p>
<p>
	If you enter 0 "Points", this will let you give Students Extra Credit.
</p>
<p>
	If you check "Apply to all Periods for this Course", the assignment will be added for each period for which you teach a specific course, in the same way assignment types are added.
</p>
<p>
	If you check "Enable Assignment Submission", Students (or Parents) can submit the assignment (upload a file and/or leave a message). Submissions are opened from the assigned date and until the due date. If no due date has been set, submissions are open until the end of the quarter. You can later consult the submissions in the "Grades" program.
</p>
<p>
	To change an assignment or type, click on the assignment or type you want to modify and click on the value you want to change in the grey area above the assignments / types lists. Then, change the value and click the "Save" button.
</p>
<p>
	Finally, to delete an item, select it by clicking on its title on the list and click the "Delete" button at the top of the screen. You will be asked to confirm the deletion.
</p>
HTML;

	$help['Grades/Grades.php'] = <<<HTML
<p>
	<i>Grades</i> allows you to input assignment grades for all your students in the current period. By default, this program will list the students in your first period class. You can alter the current period by changing the period pull-down menu in the left frame to the desired period.
</p>
<p>
	Once you have chosen the correct period, you will see the total points and cumulative grade for each student in your class. You can view the grades for an assignment by selecting the assignment from the assignment pull-down menu at the top of the screen. From here, you can input a new grade by entering the points earned into the blank field next to the student's name or you can modify an existing grade by clicking on the points earned and changing the value. After changing the grades, click the "Save" button at the top of the screen.
</p>
<p>
	You can also view and change all the grades for a single student by clicking on the student's name in the list. Input grades in the same way that you did with the multiple student list.
</p>
HTML;

	$help['Grades/ProgressReports.php'] = <<<HTML
<p>
	<i>Progress Reports</i> is a utility that allows you to print progress reports for any number of students.
</p>
<p>
	You can choose to print the progress reports with mailing labels. The progress reports will have mailing labels positioned in such a way as to be visible in a windowed envelope when the sheet is folded in thirds. More than one progress report may be printed per student if the student has guardians residing at more than one address.
</p>
<p>
	The progress reports will be automatically downloaded to your computer in the printable PDF format when you click the "Submit" button.
</p>
HTML;

	$help['Grades/AnomalousGrades.php'] = <<<HTML
<p>
	<i>Anomalous Grades</i> is a report that will help you to keep track of missing, inappropriate and excused grades. The grades appearing on this report are NOT problematic, but you MAY wish to review them. Missing, excused &amp; negative grades, or grades that are extra credit or that exceed 100% are shown. The "Problem" column indicates the reason why the grade is anomalous.
</p>
<p>
	You can select the class using the course period pull-down in the left menu. You can also select which type of "anomalous" grades you wish the report to display.
</p>
HTML;

	// Parent & Student.
else :

	$help['Grades/ReportCards.php'] = <<<HTML
<p>
	<i>Report Cards</i> is a utility that allows you to print report cards for your child.
</p>
<p>
	Before printing the report cards, you must select which marking periods to display on the report card by checking desired marking period checkboxes.
</p>
<p>
	The report cards will be automatically downloaded to your computer in the printable PDF format when you click the "Submit" button.
</p>
HTML;

	$help['Grades/Transcripts.php'] = <<<HTML
<p>
	<i>Transcripts</i> is a utility that allows you to print transcripts for your child.
</p>
<p>
	Before printing the transcripts, you must select which marking periods to display on the transcript by checking desired marking period checkboxes.
</p>
<p>
	The transcripts will be automatically downloaded to your computer in the printable PDF format when you click the "Submit" button.
</p>
HTML;

	$help['Grades/StudentAssignments.php'] = <<<HTML
<p>
	<i>Assignments</i> allows you to view your child's assignments.
</p>
<p>
	In the detailed view of an assignment, you will be able to submit an assignment if allowed by the teacher. To this effect, you will be given the possibility to upload a file and/or leave a message.
</p>
<p>
	Assignment submissions are opened until the due date. If no due date has been set, submissions are open until the end of the quarter.
</p>
<p>
	You can change the marking period using the dropdown list available in the left frame.
</p>
HTML;

	$help['Grades/StudentGrades.php'] = <<<HTML
<p>
	<i>Gradebook Grades</i> allows you to view the grades earned by your child.
</p>
<p>
	You can change the marking period using the dropdown list available in the left frame.
</p>
HTML;

	$help['Grades/GPARankList.php'] = <<<HTML
<p>
	<i>GPA / Class Rank</i> is a report that shows the unweighted GPA, weighted GPA, and class rank of your child.
</p>
HTML;

endif;


// ATTENDANCE ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Attendance/Administration.php'] = <<<HTML
<p>
	<i>Administration</i> allows you to view and change the student attendance records for any given day.
</p>
<p>
	To change the student's attendance status for any period, click on the current value and select the short name of the attendance code you would like to assign that student. After making all the desired modifications, click the "Update" button at the top of the screen. You can also limit the list of students based upon what attendance codes the students have been assigned on the current day. For instance, by default, all students with any attendance codes with a state value of "Absent" are listed. This is shown by the pull-down menu on the upper right-hand corner of the screen that displays "Abs." This menu can be changed to the short name of any attendance code, and only students who received that code during the current day will be displayed. This menu can even be changed to "All" which will list all students for whom attendance has been taken. You can add an attendance code by clicking the add icon (+) next to the attendance code pull-down menu. If you select a second attendance code, the program will list students who received either code during the day.
</p>
<p>
	You can alter the date displayed by clicking on the date on the upper left-hand side of the screen and changing it to the desired date.
</p>
<p>
	After making changes to the attendance codes displayed or the current date, click the "Update" button to refresh the screen with the new parameters.
</p>
<p>
	You can also view the attendance code assigned to the student by the teacher as well as view and enter a comment for each period by clicking on the student's name.
</p>
<p>
	Clicking on "Current Student" on the top of the screen will display the day's attendance records for the current student displayed in the left frame.
</p>
HTML;

	$help['Attendance/AddAbsences.php'] = <<<HTML
<p>
	<i>Add Absences</i> allows you to add an absence to a group of students in one action.
</p>
<p>
	First, search for students. Notice that you can search for students who are enrolled in a specific course or are in a certain activity. This can be useful since you can add an absence record for each period to all of Mrs. Smith's first period students or the football team who will be on an all day field trip.
</p>
<p>
	From the search result, you can select any number of students. You can select all the students in the list by checking the checkbox in the column headings above the list. You can also specify the periods to mark the selected students, the absence code, the absence reason, and the date in the yellow box above the student list. After you have selected each desired student from this list, all the desired periods, the absence code, absence reason, and absence date, click the "Save" button at the top of the screen.
</p>
HTML;

	$help['Attendance/Percent.php'] = <<<HTML
<p>
	<i>Average Daily Attendance</i> is a report that shows the number of students, days possible, the number of student days present, the number of student days absent, the Average Daily Attendance, the average number of students in attendance per day, and the average number of students absent per day for any date range at your school. These numbers are broken down by grade.
</p>
<p>
	You can alter the date range displayed by changing the date pull-down menus at the top of the screen and clicking the "Go" button. You can also limit the numbers by searching by gender or any of the customizable data fields by clicking on the "Advanced" link.
</p>
HTML;

	$help['Attendance/Percent.php&list_by_day=true'] = <<<HTML
<p>
	<i>Average Daily Attendance by Day</i> is a report that shows the number of students, days possible, the number of student days present, the number of student days absent, and the Average Daily Attendance per day for any date range at your school. These numbers are broken down by grade.
</p>
<p>
	You can alter the date range displayed by changing the date pull-down menus at the top of the screen and clicking the "Go" button. You can also limit the numbers by searching by gender or any of the customizable data fields by clicking on the "Advanced" link.
</p>
HTML;

	$help['Attendance/DailySummary.php'] = <<<HTML
<p>
	<i>Attendance Chart</i> is a report that shows the daily attendance status of any number of students for every date during any timeframe.
</p>
<p>
	After searching for students, you can alter the date range by changing the date pull-down menus at the top of the screen and clicking the "Go" button. The list shows each student's daily attendance value for each day with color codes. A red box signifies that the student was absent all day, a yellow box signifies that a student was absent half-day, and a green box signifies that a student was present all day long.
</p>
<p>
	You can see the attendance records for each period for any student by clicking on a student's name from the list. Here, the absence code is displayed in the color-coded box.
</p>
HTML;

	$help['Attendance/StudentSummary.php'] = <<<HTML
<p>
	<i>Student Summary</i> is a report that shows the days for which a student has an absence.
</p>
<p>
	After selecting a student, you can alter the date range by changing the date pull-down menus at the top of the screen and clicking the "Go" button. The list shows the student's absences for each period of each day that he had an absence. A red "x" indicates the student was absent in the corresponding period.
</p>
HTML;

	$help['Attendance/TeacherCompletion.php'] = <<<HTML
<p>
	<i>Teacher Completion</i> is a report that shows which teachers have not entered attendance for any given day.
</p>
<p>
	The red checks indicate that a teacher has failed to enter the current day's attendance for that period.
</p>
<p>
	You can select the current date from the pull-down menu at the top of the screen. You can also show only one period by choosing that period from the period pull-down menu at the top of the screen. After choosing a date or period, the list will be automtically refreshed with the new parameters.
</p>
HTML;

	$help['Attendance/FixDailyAttendance.php'] = <<<HTML
<p>
	<i>Recalculate Daily Attendance</i> is a utility to recalculate the daily attendance for a specific time-frame.
</p>
<p>
	Select the time-frame and click "OK". All attendance will be then calculated for whole day/half day. Please select a shorter time-frame if the system freezes. Using this utility can avoid problems related to missing course periods attendance.
</p>
HTML;

	$help['Attendance/DuplicateAttendance.php'] = <<<HTML
<p>
	<i>Delete Duplicate Attendance</i> is a utility to spot and delete any attendance that was taken for a student AFTER their enrollment drop date.
</p>
<p>
	In case a student is retro-actively dropped from a course, but attendance has already been taken by teachers or administrators for dates after the drop date.
</p>
HTML;

	$help['Attendance/AttendanceCodes.php'] = <<<HTML
<p>
        Програмата <i>Кодове за присъствие</i> Ви позволява да установите кодове за присъствие за Вашето училище. Кодовете за присъствие се използват в програмата на преподавателите "Take Attendance" program (as well as most of the Attendance reports) and specify whether or not the student was present during the period, and if he wasn't, the reason.
</p>
<p>
	To add an attendance code, fill in the attendance code's title, short name, type, and state code. Select whether or not the code should be a teacher's default from the empty fields at the bottom of the attendance codes list and click the "Save" button. Generally, the attendance code called "Present" will be marked as the teacher's default. If the attendance code is marked as being type "Teacher," a teacher will be able to select that attendance code from their "Take Attendance" program. Administrators will be able to assign all codes to a student.
</p>
<p>
	To modify an attendance code, click on any of the attendance code's information, change the value, and click the "Save" button.
</p>
<p>
	To delete an attendance code, click the delete icon (-) next to the attendance code you want to delete. You will be asked to confirm the deletion.
</p>
HTML;

	$help['Custom/AttendanceSummary.php'] = <<<HTML
<p>
	<i>Attendance Summary</i> is a report that shows a day by day record of each student's attendance over the school year in one table.
</p>
<p>
	You must first select a (group of) student(s) by using the "Find a Student" search screen. You can search for students who have requested a specific course by clicking on the "Choose" link next to the search option "Course" and choosing a course from the popup window that appears.
</p>
<p>
	From the search result, you can select any number of students. You can select all the students in the list by checking the checkbox in the column headings above the list. After you have selected each desired student from this list, click "Create Attendance Report for Select Students" to generate the report in a PDF format.
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'teacher' ) :

	$help['Attendance/TakeAttendance.php'] = <<<HTML
<p>
	<i>Take Attendance</i> allows you to enter period attendance for all your students in the current period. By default, this program will list the students in your first period class. You can alter the current period by changing the period pull-down menu in the left frame to the desired period.
</p>
<p>
	Once you are in the correct period, you can enter attendance by selecting the attendance code corresponding to each student. Once you have entered attendance for all your students, click the "Save" button at the top of the screen.
</p>
HTML;

	$help['Attendance/DailySummary.php'] = <<<HTML
<p>
	<i>Daily Summary</i> is a report that shows the daily attendance status of any number of students for every date during any timeframe.
</p>
<p>
	After searching for students, you can alter the date range by changing the date pull-down menus at the top of the screen and clicking the "Go" button. The list shows each student's daily attendance value for each day with color codes. A red box signifies that the student was absent all day, a yellow box signifies that a student was absent half-day, and a green box signifies that a student was present all day long.
</p>
<p>
	You can see the attendance records for each period for any student by clicking on a student's name from the list. Here, the absence code is displayed in the color-coded box.
</p>
HTML;

	$help['Attendance/StudentSummary.php'] = <<<HTML
<p>
	<i>Student Summary</i> is a report that shows the days for which a student has an absence.
</p>
<p>
	After selecting a student, you can alter the date range by changing the date pull-down menus at the top of the screen and clicking the "Go" button. The list shows the student's absences for each period of each day that he had an absence. A red "x" indicates the student was absent in the corresponding period.
</p>
HTML;

	// Parent & Student.
else :

	$help['Attendance/DailySummary.php'] = <<<HTML
<p>
	<i>Daily Summary</i> is a report that shows the daily attendance status of your child during any timeframe.
</p>
<p>
	You can alter the date range by changing the date pull-down menus at the top of the screen and clicking the "Go" button. The list shows your child's daily attendance value for each period of each day with color codes. A red box signifies that the student was absent that period, and a green box indicates that the student was either present or tardy that period. The absence code is displayed in the box.
</p>
HTML;

endif;


// ELIGIBILITY ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Eligibility/Student.php'] = <<<HTML
<p>
	<i>Student Screen</i> is a display of the student's activities and the current timeframe's eligibility grades. The program also allows you to add and delete activities to the student.
</p>
<p>
	You must first select a student by using the "Find a Student" search screen. You can search for students who are enrolled in a specific course by clicking on the "Choose" link next to the "Course" search option and choosing a course from the popup window that appears. You can also search for students in a certain activity and for students who are currently ineligible.
</p>
<p>
	To add an activity to the student, select the desired activity from the activity pull-down next to the add icon (+) and click the "Add" button.
</p>
<p>
	To drop an activity, click on the delete icon (-) next to the activity you want to drop.
</p>
<p>
	You can specify the desired eligibility timeframe by choosing the desired timeframe from the pull-down menu at the top of the screen. These timeframes are setup in the "Entry Times" program.
</p>
HTML;

	$help['Eligibility/AddActivity.php'] = <<<HTML
<p>
	<i>Add Activity</i> allows you to add an activity to a group of students in one action.
</p>
<p>
	First, search for students. Notice that you can search for students who are in a certain activity or course. From the search result, you can select any number of students. You can select all the students in the list by checking the checkbox in the column headings above the list. Next, select an activity to be added from the pull-down menu at the top of the screen. After you have selected each desired student from this list and the desired activity, click the "Add Activity to Selected Students" button at the top of the screen.
</p>
HTML;

	$help['Eligibility/Activities.php'] = <<<HTML
<p>
	<i>Activities</i> allows you to setup your school's activities.
</p>
<p>
	To add an activity, fill in the activity's title, beginning date, and ending date in the empty fields at the bottom of the activities list and click the "Save" button.
</p>
<p>
	To modify an activity, click on any of the activity's information, change the value, and click the "Save" button.
</p>
<p>
	To delete an activity, click the delete icon (-) next to the activity you want to delete. You will be asked to confirm the deletion.
</p>
HTML;

	$help['Eligibility/EntryTimes.php'] = <<<HTML
<p>
	<i>Entry Times</i> allows you to setup the weekly timeframe in which teachers can enter eligibility. Teachers must enter eligibility every week within this range. Besides the teacher's "Enter Eligibility" program, this timeframe is used in most eligibility reports
</p>
<p>
	To change the timeframe, simply change the upper and lower bounds of the timeframe and click the "Save" button.
</p>
HTML;

	$help['Eligibility/StudentList.php'] = <<<HTML
<p>
	<i>Student List</i> is a report that shows every course and eligibility grade assigned to any number of students.
</p>
<p>
	After searching for students, you can specify the eligibility timeframe you want to view. These timeframes are setup in the "Entry Times" program.
</p>
HTML;

	$help['Eligibility/TeacherCompletion.php'] = <<<HTML
<p>
	<i>Teacher Completion</i> is a report that shows which teachers have not entered eligibility for any given date range. The date range is set in the "Entry Times" program.
</p>
<p>
	The red checks indicate that a teacher has failed to enter the current date range's eligibility for that period.
</p>
<p>
	You can select the current date range from the pull-down menu at the top of the screen. You can also show only one period by choosing that period from the period pull-down menu at the top of the screen. After choosing a date range or period, click the "Go" button to refresh the list with the new parameters.
</p>
HTML;

elseif ( User( 'PROFILE' ) === 'teacher' ) :

	$help['Eligibility/EnterEligibility.php'] = <<<HTML
<p>
	<i>Enter Eligibility</i> allows you to enter eligibility grades for all your students in the current period. By default, this program will list the students in your first period class. You can alter the current period by changing the period pull-down menu in the left frame to the desired period.
</p>
<p>
	Once you are in the correct period, you can enter eligibility grades by selecting the eligibility code corresponding to each student. Once you have entered eligibility for all your students, click the "Save" button at the top of the screen.
</p>
<p>
	If you are using the Gradebook, you can have RosarioSIS calculate each student's eligibility grades by clicking on the "Use Gradebook Grades" link at the top of the list. Clicking this link will automatically save each student's eligibility grades and refresh the list.
</p>
<p>
	You must enter eligibility each week during the timeframe specified by your school's administration.
</p>
HTML;

	// Parent & Student.
else :

	$help['Eligibility/Student.php'] = <<<HTML
<p>
	<i>Student Screen</i> is a display of your child's activities and the current timeframe's eligibility grades.
</p>
<p>
	You can specify the eligibility timeframe you want to view by choosing the desired timeframe from the pull-down menu at the top of the screen. Eligibility is entered once per week.
</p>
HTML;

	$help['Eligibility/StudentList.php'] = <<<HTML
<p>
	<i>Student List</i> is a report that shows every course and eligibility grade assigned to your child.
</p>
<p>
	You can specify the eligibility timeframe you want to view by choosing the timeframe from the pull-down menu at the top of the screen and clicking the "Go" button. Eligibility is entered once per week.
</p>
HTML;

endif;
