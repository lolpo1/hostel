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
					<h1>Відгуки</h1> 
					<div class="wrapper2">
						<div class="container ">
							<div class="row justify-content-center">
								<div class="col-12 d-flex flex-row justify-content-center h_border">
									<div class="col-1 tables d-flex justify-content-center align-items-center">
										<h2>№</h2>
									</div>
									<div class="col-6 tables d-flex justify-content-center align-items-center">	
										<h2>Коментарії</h2>
									</div>
									<div class="col-3 tables d-flex justify-content-center align-items-center">	
										<h2>Нікнейм</h2>
									</div>
									<div class="col-2 tables d-flex justify-content-center align-items-center">	
										<h2>Фото</h2>
									</div>
							
								</div>
							</div>
						</div>
						<?php 
							$categories = get_categories($link,"reviews");
						 ?>
						<?php foreach ($categories as $reviews): ?>
						<div class="container p-2">
							<div class="row justify-content-center mt-3">
								<div class="col-12 d-flex flex-row justify-content-center">
									<div class="col-1 tables d-flex justify-content-center align-items-center">
										<h4><?=$reviews["id"] ?></h4>
									</div>
									<div class="col-6 tables d-flex justify-content-center align-items-center">	
										<h4><?=$reviews["textotziv"] ?></h4>
									</div>
									<div class="col-3 tables d-flex justify-content-center align-items-center">	
										<h4><?=$reviews["username"] ?></h4>
									</div>
									<div class="col-2 tables d-flex justify-content-center align-items-center">	
										<img <?=$reviews["fotourl"] ?> alt="comp" class="img-fluid">
									</div>
									
								</div>
							</div>
						</div>
						
						<?php endforeach; ?>
					</div>
					<div class="wrapper2 mt-3">
						<?php if ($_COOKIE['user'] != ''): 
						?>	
						<div class="container">
							<div class="row py-3 justify-content-center">
								<form method="POST" action="add_review.php" class="d-flex flex-column col-12" enctype="multipart/form-data">
									<div class="d-flex">
										<div class="col-6 d-flex flex-column justify-content-end">
											<h4>Текст відгуку</h4>
											<input type="text" name="textotziv" placeholder="Текст відгуку">
										</div>
										<div class="col-3 d-flex flex-column justify-content-end">
											<h4>Нікнейм</h4>
											<input type="text" name="username" placeholder="Нікнейм">
										</div>
										<div class="col-3 d-flex flex-column justify-content-end">
											<h4>Ваше фото</h4>
											<input type="file" name="file" multiple accept="image/*,image/jpeg" id="fotourl">
										</div>
									</div>
								<input class="mt-3 btn btn-primary" type="submit" name="submit" value="Додати">	
								
								</form>
							</div>
						</div>
						<?php endif; ?>
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