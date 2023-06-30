<?php 
include('database.php');
include('function.php');
global $link;
$num = $_POST['num'];
mysqli_query($link,"DELETE FROM `teacher_class` WHERE `teacher_class`.`id` = $num");
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>