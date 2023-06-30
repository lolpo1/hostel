<?php 
include('database.php');
global $link;
  
mysqli_query($link,"DELETE FROM inform");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>