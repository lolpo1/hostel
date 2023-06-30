<?php

$link = mysqli_connect('localhost','root','root','hostel');
if (mysqli_connect_errno())
{
	echo 'Mistake ('.mysqli_connect_errno().'): '.mysqli_connect_error();
	exit();
}

?>