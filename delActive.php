<?php
include("database.php");

include('function.php');

$id = $_POST['id'] ;
$d = $_POST['d'];
$count=0;
$count2=0;
$ready=0;
$categories = get_categories($link,"usersactive");
foreach ($categories as $usersactive){
	if ($usersactive["id"]==$id)
		$count++;
}
if ($count==0)
{
	mysqli_query($link,"INSERT INTO usersactive (id, d, ready) VALUES ('$id','$d','$ready')");
}
else
{
	foreach ($categories as $usersactive){
		$delta=$d-$usersactive["d"];
		$delid=$usersactive["id"];	
		if ($delta<50)
		{
			mysqli_query($link,"UPDATE usersactive SET d = $d WHERE `usersactive`.`id` = $id");
		}
		else
		{
			mysqli_query($link,"DELETE FROM usersactive WHERE `usersactive`.`id` = $delid");
		}
	}	
}

?>