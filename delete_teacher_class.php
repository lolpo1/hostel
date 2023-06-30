<?php 
include('database.php');
global $link;
  
mysqli_query($link,"DELETE FROM teacher_class");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>