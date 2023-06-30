<?php
include("database.php");
include('function.php');

$name=$_POST['name'];
$con=$_POST['con'];

$categories = get_categories($link,"message");

foreach ($categories as $message){
 	$id=$message["id"];
 	$msg=$message["message"];
    $tosend=$message["tosend"];
    $t=$message["d"];
    if (($name==$id && $con==$tosend)||($con==$id && $name==$tosend)){
    echo "
 	  <div id='message'>
 	  <b>$id at $t:</b>
 	  <br>
 	  $msg
 	  </div>
 	";
    }
}


?>