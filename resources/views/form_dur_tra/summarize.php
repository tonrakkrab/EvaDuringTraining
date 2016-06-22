<?php
if (is_null($eva_dur_tras)) {
	echo "eva_dur_tra in null.";
}
else
{
	echo "eva_dur_tra is not null.<br/>";
}
echo "<hr>";
foreach ($eva_dur_tras as $eva_dur_tra) {
    echo " Course Code: " . $eva_dur_tra->course_code;
    echo " , Course Came: " . $eva_dur_tra->course_name;
    echo " , Time Period: " . $eva_dur_tra->time_period;
    echo " , Time Unit Code: " . $eva_dur_tra->time_unit_code;
    echo " , Time Unit Name: " . $eva_dur_tra->time_unit_name;
    echo "<hr>";	
}
//phpinfo();
?>