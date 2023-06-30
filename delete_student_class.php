<?php 
include('database.php');
global $link;
  
mysqli_query($link,"DELETE FROM student_class");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>