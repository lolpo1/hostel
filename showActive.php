<?php
include("database.php");
include('function.php');


$i = 1;
$categories = get_categories($link,"usersactive");
foreach ($categories as $usersactive){
	$id=$usersactive["id"];
	echo $i.". ".$id."<br>";
	$i++;
};

?>