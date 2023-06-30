<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM student_class";
$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;

$sername = $_POST['sername'];
$name = $_POST['name'];
$classname = $_POST['classname'];


mysqli_query($link,"INSERT INTO student_class (id, sername, name, classname)  
VALUES ('$id','$sername','$name','$classname')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>