<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM reviews";
$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;

$textotziv = $_POST['textotziv'];
$username = $_POST['username'];
$fotourl = "src=\"uploades/".$_FILES['file']['name']."\"";

if (isset($_POST['submit']) and $_FILES){
	move_uploaded_file($_FILES['file']['tmp_name'], 'uploades/'.$_FILES['file']['name']);
}


mysqli_query($link,"INSERT INTO reviews (id, textotziv, username, fotourl)  
VALUES ('$id','$textotziv','$username','$fotourl')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>