<br>
<?php
if ($is_completed == '1') {
	echo "is_completed = " . $is_completed . ", {$num_rows} rows delete completed.";
}
else
{
	echo "is_completed = " . $is_completed . ", Not Completed.";
}
?>