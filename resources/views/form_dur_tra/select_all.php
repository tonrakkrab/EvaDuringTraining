<br>
<?php
if (is_null($eva_dur_tras)) {
	echo "eva_dur_tra in null.";
}
else
{
	echo "eva_dur_tra is not null.<br/>";
}
echo "<hr>";
/*
			$table->string('course_code', 10);
			$table->string('course_name', 200);
			$table->strimg('time_period');
            $table->string('time_unit_code',2);
            $table->string('time_unit_name',200);

			$table->date('evaluation_date')
			$table->string('duration_code', 2);
			$table->string('duration_name', 200);

			$table->string('question_type_code', 2);
			$table->string('question_type_name', 200);
			$table->string('question_code', 10);
			$table->string('question_name', 200);

			$table->string('answer_code', 10);
			$table->string('answer_name', 200);
			$table->string('answer_text', 200);
*/
foreach ($eva_dur_tras as $eva_dur_tra) {
	echo "ID: " . $eva_dur_tra->id;
/*
    echo "<br>Course Code: " . $eva_dur_tra->course_code;
    echo ", Course Name: " . $eva_dur_tra->course_name;
    echo ", Time Period: " . $eva_dur_tra->time_period;
    echo ", Time Unit Code: " . $eva_dur_tra->time_unit_code;
    echo ", Time Unit Name: " . $eva_dur_tra->time_unit_name;

    echo ", Evaluation Date: " . $eva_dur_tra->evaluation_date;
    echo ", Duration Code: " . $eva_dur_tra->duration_code;
    echo ", Duration Name: " . $eva_dur_tra->duration_name;
*/
    echo ", Question Type Code: " . $eva_dur_tra->question_type_code;
    echo ", Question Type Name: " . $eva_dur_tra->question_type_name;
    echo "<br>Question Code: " . $eva_dur_tra->question_code;
    echo ", Question Name: " . $eva_dur_tra->question_name;

    echo "<br>Answer Code: " . $eva_dur_tra->answer_code;
    echo ", Answer Name: " . $eva_dur_tra->answer_name;
    echo ", Answer Text: " . $eva_dur_tra->answer_text;


    echo "<hr>";	
}
//phpinfo();
?>