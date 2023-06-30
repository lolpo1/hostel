<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM teacher_class";
$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;

$sername = $_POST['sername'];
$subject = $_POST['subject'];
$classname = $_POST['classname'];


mysqli_query($link,"INSERT INTO teacher_class (id, sername, subject, classname)  
VALUES ('$id','$sername','$subject','$classname')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>