<?php 
	include('database.php');
	global $link;
	$sql = "SELECT * FROM users";
	$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;
	$email = filter_var(trim($_POST['reg_email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['reg_pass']),FILTER_SANITIZE_STRING);
	$sername = filter_var(trim($_POST['reg_sername']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['reg_name']),FILTER_SANITIZE_STRING);
	$photo = "src=\"uploades/".filter_var(trim($_FILES['reg_photo']['name']),FILTER_SANITIZE_STRING)."\"";
	$adress = filter_var(trim($_POST['reg_adress']),FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['reg_phone']),FILTER_SANITIZE_STRING);
	
	//echo $id." ".$email." ".$pass." ".$sername." ".$name." ".$photo." ".$adress." ".$phone;

	// Проверка на ввод
	if (mb_strlen($email)<5||mb_strlen($email)>90){
		echo "Wrong email";
		exit();
	} else if (mb_strlen($pass)<4||mb_strlen($pass)>20){
		echo "Wrong password";
		exit();
	}
	if (isset($_POST['submit']) and $_FILES){
	move_uploaded_file($_FILES['reg_photo']['tmp_name'], 'uploades/'.$_FILES['reg_photo']['name']);
	
}

	mysqli_query($link,"INSERT INTO users (id, login, password, sername,name, fotourl, adress, phone) VALUES ('$id','$email','$pass','$sername','$name','$photo','$adress', '$phone')");
	
	header('Location: index.php');
 ?>