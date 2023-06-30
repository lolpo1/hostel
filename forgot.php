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
					<h1>Забули пароль</h1> 
					<div class="wrapper p-3">					
						<form method="post"	id="form_reg" action="forgot_pass.php">
							<div class="d-flex row align-items-center m-0" id="block-form-registration">
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2">Введіть ваш імейл</label>
								<input type="email" name="reg_email" id="reg_email" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4">
								<div class="mt-2 col-6 offset-3 row justify-content-center p-0">
									<button type="submit" class="btn btn-danger btn-lg" name="reg_submit" id="form_submit">Вхід</button>
								</div>	
							</div>
						</form>
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