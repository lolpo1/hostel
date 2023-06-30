<?php 
require_once 'database.php';
require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<?php include('css.php') ?>
	<title>Hostel</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			<div class="col-12 col-md-4 p-0">
				<?php include('aside.php') ?>
			</div>
			<div class="main_section col-12 col-md-8">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Ласкаво просимо</h1> 
					<?php 
						$categories = get_categories($link,"users");
					 ?>
					 <h1>
					<?php foreach ($categories as $users):
						if ($_COOKIE['user'] == $users["id"])
							echo $users["sername"]." ".$users["name"];
						endforeach;?>
						
					</h1>
 		
				</div>
			</div>
		</div>
	</main>

	<div class="chatbot__btn">
	  <div class="chatbot__tooltip d-none">Є питання?</div>
	</div>
	
	<?php include('footer.php') ?>
	
	<?php include('script.php') ?>
</body>
</html>