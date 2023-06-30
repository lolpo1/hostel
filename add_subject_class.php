<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM subject_class";
$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;


$subject = $_POST['subject'];
$classname = $_POST['classname'];
$teachername = $_POST['teachername'];


mysqli_query($link,"INSERT INTO subject_class (id, subject, classname, teachername)  
VALUES ('$id','$subject','$classname', '$teachername')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>