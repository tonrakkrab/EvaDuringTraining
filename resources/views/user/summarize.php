<?php
if (is_null($users)) {
	echo "User in null.";
}
else
{
	echo "User is not null.<br/>";
}

foreach ($users as $user) {
	echo "<br/>";;
    echo " User: " . $user->id;
    echo " Name: " . $user->name;
    echo " Email: " . $user->email;
    echo " Passwprd: " . $user->password;
}
//phpinfo();
?>