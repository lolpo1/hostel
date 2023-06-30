<?php
include("database.php");

include('function.php');


$categories = get_categories($link,"usersactive");

$id;
$c=0;
$ct=false;
do{
	$ct=false;
	$c++;
	$tmp=1000+$c;
	foreach ($categories as $usersactive)
		if ($usersactive["id"]==$tmp)
			$ct=true;
	if ($ct)
		$id=$tmp;
}while($ct);

echo $tmp;

?>