<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM inform";
$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;

$sername = $_POST['sername'];
$name = $_POST['name'];
$classnum = $_POST['classnum'];
$room = $_POST['room'];
$program = $_POST['program'];
$history = $_POST['history'];


mysqli_query($link,"INSERT INTO inform (id, sername, name, classnum, room, program, history)  
VALUES ('$id','$sername','$name','$classnum','$room','$program','$history')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>