<?php 
include('database.php');
include('function.php');
global $link;
$num = $_POST['num'];
mysqli_query($link,"DELETE FROM `subject_class` WHERE `subject_class`.`id` = $num");
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>