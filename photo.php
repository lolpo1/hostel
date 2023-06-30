<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<?php include('css.php') ?>
	<title>Фото</title>
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
					<h1>Фотографії</h1> 
					<div class="wrapper p-3 col-12 text-center d-flex flex-column">		
						<div class="col-12">
							<h4>Наш гуртожиток</h4>
						</div>
						
						<div class="wrapper">
							<img src="img/ph1.jpg" alt="comp">
						</div>
						<div class="wrapper">
							<img src="img/ph2.jpg" alt="comp">
						</div>
						<div class="wrapper">
							<img src="img/ph3.jpg" alt="comp">
						</div>
						<div class="wrapper">
							<img src="img/ph4.jpg" alt="comp">
						</div>
					</div>		
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