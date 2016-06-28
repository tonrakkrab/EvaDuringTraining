<br>
<?php
if (is_null($eva_dur_tras)) {
	echo "eva_dur_tra in null.";
}
else
{
	echo "eva_dur_tra is not null.<br/>";
}
/*if (is_null($ids)) {}
else
{
    echo "ids array first" . $ids[0];
    echo "ids array second" . $ids[1];
    echo "ids array third" . $ids[2];
}
echo "<hr>";
*/
//$table->date('evaluation_date')
/*
<?php
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
?>

<?php
$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!
?>

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
<?php
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
*/
// OK array 2 dimension
$q = array (    
    'num_q' => 5,
    'a1' => array(0, 0, 2, 1, 3),
    'a2' => array(0, 0, 4, 0, 1),
    array(0, 0, 2, 3, 0),
    'all_a_text' => "อยากเรียน PHP Framework,,ดีมากครับ ขอบคุณมากๆ,,"
);
echo "Number Qeustion: {$q['num_q']}";
//echo "<br>Q1-A1: {$q[0][1]}<br><br>"; //ok
echo "<br>Q1-A1: {$q['a1'][3]}<br><br>"; //ok


// OK array 3 dimension
$q = array (
    'num_q' => 5,
    'score' => array (
        'a1' => array(0, 0, 2, 1, 2),
        'a2' => array(0, 0, 4, 0, 1),
        'a3' => array(0, 0, 2, 3, 0),
        'all_a_text' => "อยากเรียน PHP Framework,,ดีมากครับ ขอบคุณมากๆ,,"
    ),
    // ตัวอย่างหลังการคำนวณคะแนน
    /*
    'evaluate_percent' => array (
        'a1' => array(0, 0, 40, 20, 40),
        'a2' => array(0, 0, 80, 0, 20),
        'a3' => array(0, 0, 40, 60, 0),
        'all_a_text' => "อยากเรียน PHP Framework,ดีมากครับ ขอบคุณมากๆ"
    ),
    */
    'evaluate_percent' => array (
        'a1' => array(0, 0, 0, 0, 0),
        'a2' => array(0, 0, 0, 0, 0),
        'a3' => array(0, 0, 0, 0, 0),
        'all_a_text' => ""
    ),
);

// evaluate_percent question_2 -> answer -> choice_3
// //calculate percent
$num_req = $q['num_q'];
$eva_score_q2_3 = $q['score']['a2'][2];
$eva_per_q2_3 = ($eva_score_q2_3 / $num_req) * 100;
$q['evaluate_percent']['a2'][2] = $eva_per_q2_3;

echo "<br>num_req : {$num_req}";
echo "<br>eva_score_q2_3 : {$eva_score_q2_3}";
echo "<br>eva_per_q2_3 : {$eva_per_q2_3}%";
echo "<br>";

echo "<br>Number Qeustion: {$q['num_q']}";
echo "<br>Q2-A2-C3-score: {$q['score']['a2'][2]}";
echo "<br>Q2-A2-C3-percent: {$q['evaluate_percent']['a2'][2]}%";
echo "<br>Q4-A: {$q['score']['all_a_text']}";
echo "<br>Q4-A-evaluate: {$q['evaluate_percent']['all_a_text']}";
echo "<br><br>";

/*
foreach ($eva_dur_tras as $eva_dur_tra) {

	echo "ID: " . $eva_dur_tra->id;
    echo "<br>Course Code: " . $eva_dur_tra->course_code;
    echo ", Course Name: " . $eva_dur_tra->course_name;
    echo ", Time Period: " . $eva_dur_tra->time_period;
    echo ", Time Unit Code: " . $eva_dur_tra->time_unit_code;
    echo ", Time Unit Name: " . $eva_dur_tra->time_unit_name;

    echo ", Evaluation Date: " . $eva_dur_tra->evaluation_date;
    echo ", Duration Code: " . $eva_dur_tra->duration_code;
    echo ", Duration Name: " . $eva_dur_tra->duration_name;

    echo "<br>Question Type Code: " . $eva_dur_tra->question_type_code;
    echo ", Question Type Name: " . $eva_dur_tra->question_type_name;
    echo ", Question Code: " . $eva_dur_tra->question_code;
    echo ", Question Name: " . $eva_dur_tra->question_name;

    echo "<br>Answer Code: " . $eva_dur_tra->answer_code;
    echo ", Answer Name: " . $eva_dur_tra->answer_name;
    echo ", Answer Text: " . $eva_dur_tra->answer_text;

    echo "<hr>";	
}*/
?>