<?php
	include("database.php");
	include('function.php');
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
					<h1>Форум</h1> 
					<div class="wrapper p-3 col-12 text-center">				
						<h4>В цій частині ми спілкуємося</h4>
						<div class="container">
							<div class="row">
								<div id='window' class="col-12">
									<h2 align='center'>Корпоративний час</h2>
									<?php if ($_COOKIE['user'] == ''): ?>
										<h2>Ввійдіть в систему перед початком спілкування</h2>
									<?php else: ?>	
									<div>
										<span id="autorize">Ваш ID: </span><br>
										<span id="autorize1">Ви з'єдналися з ID: </span><br>
										<input type="text" placeholder="З'єднатися з користувачем" id="con">
										<button class="btn btn-success" onclick="connection()">З'єднатися</button>
										<button class="btn btn-danger" onclick="disconnection()">Роз'єднатися</button>

										<div id='active1'>Зараз онлайн:<br><div id="active"></div></div><br>
										<span>Введіть ваше повідомлення:</span><br>
										<textarea id="txtMessage" class="col-12 col-md-6"></textarea>
										<br>
										<button id="btnSend" class="btn btn-primary">Відправити</button>
										<hr>
										<div id="cover">
											<div id="messages" class="mb-3"></div>	
										</div>
										
									</div>
									<?php endif; ?>
								</div>
							</div>
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