<?php 
include('database.php');
include('function.php');
global $link;



$email = filter_var(trim($_POST['reg_email']),FILTER_SANITIZE_STRING);
$categories = get_categories($link,"users");

foreach ($categories as $users)
 	if ($users["login"]==$email)
 		mail($email,"Forgot pass","Your pass: ".$users["password"]);


	header('Location: index.php');
?>