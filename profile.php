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
					<h1>Мій профіль</h1> 				
					<div class="wrapper p-3 col-12 d-flex flex-column align-items-center justify-content-center">			
						<?php 
							$categories = get_categories($link,"users");
						 ?>
						<?php foreach ($categories as $users): ?>
							<?php if ($users["id"]== $_COOKIE['user']): ?>
						<div class="col-lg-6 col-6 p-2">
							<div class="wrapper col-12 p-2 d-flex flex-column align-items-center justify-content-between">
								<img <?=$users["fotourl"] ?> alt="comp" class="img-fluid">
								<h4>Прізвище: <?=$users["sername"] ?></h4>
								<h4>Ім'я: <?=$users["name"] ?></h4>
								<h4>Адреса: <?=$users["adress"] ?></h4>
								<h4>Телефон: <?=$users["phone"] ?></h4>
																	
							</div>
						</div>
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
								
				</div>
			</div>	
		</div>
		
	</main>
	<div class="chatbot__btn">
	  <div class="chatbot__tooltip d-none">Є питання?</div>
	</div>
	<?php include('footer.php') ?>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<?php include('script.php') ?>
</body>
</html>