<br>
<?php
if ($is_completed == '1') {
	echo "is_completed = " . $is_completed . ", {$num_rows} rows update completed, ID: {$id} is updated.";
}
else
{
	echo "is_completed = " . $is_completed . ", Not Completed.";
}
?>