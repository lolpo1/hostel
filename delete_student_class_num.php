<?php 
include('database.php');
include('function.php');
global $link;
$num = $_POST['num'];
mysqli_query($link,"DELETE FROM `student_class` WHERE `student_class`.`id` = $num");
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>