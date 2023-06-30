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
					<h1>Мешканці</h1> 
					<div class="wrapper p-3 col-12 text-center">				
						<table class="table table-striped table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Прізвище</th>
						      <th scope="col">Ім'я</th>
						      <th scope="col">Курс</th>
						      <th scope="col">Кімната</th>
						      <th scope="col">Рік поселення</th>
						      <th scope="col">Оплата</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
								$categories = get_categories($link,"inform");
							 ?>
							<?php foreach ($categories as $inform): ?>
						    <tr>
						      <th scope="row"><?=$inform["id"] ?></th>
						      <td><?=$inform["sername"] ?></td>
						      <td><?=$inform["name"] ?></td>
						      <td><?=$inform["classnum"] ?></td>
						      <td><?=$inform["room"] ?></td>
						      <td><?=$inform["program"] ?></td>
						      <td><?=$inform["history"] ?></td>
						    </tr>
					
						    <?php endforeach; ?>
						  </tbody>
						</table>
					</div>	
					<div class="wrapper2 mt-3">
						<?php if ($_COOKIE['user'] == '1'): 
						?>	
						<div class="container">
							<div class="row py-3 justify-content-center">
								<form method="POST" action="add_info.php" class="d-flex flex-column col-12">
									<div class="d-flex row">
										<div class="col-2 d-flex flex-column justify-content-end">
											<h4>Прізвище</h4>
											<input type="text" name="sername" placeholder="Прізвище">
										</div>
										<div class="col-2 d-flex flex-column justify-content-end">
											<h4>Ім'я</h4>
											<input type="text" name="name" placeholder="Ім'я">
										</div>
										<div class="col-2 d-flex flex-column justify-content-end">
											<h4>Курс</h4>
											<input type="text" name="classnum" placeholder="Курс">
										</div>
										<div class="col-2 d-flex flex-column justify-content-end">
											<h4>Кімната</h4>
											<input type="text" name="room" placeholder="Кімната">
										</div>
										<div class="col-2 d-flex flex-column justify-content-end">
											<h4>Рік поселення</h4>
											<input type="text" name="program" placeholder="Рік поселення">
										</div>
										<div class="col-2 d-flex flex-column justify-content-end">
											<h4>Оплата</h4>
											<input type="text" name="history" placeholder="Оплата">
										</div>
									</div>
									
								<button class="mt-3 btn btn-primary">Введення даних</button>
								</form>
							</div>
						</div>
						<div class="container">
							<div class="row p-3">
								<form method="POST" action="delete_info.php" class="d-flex flex-column col-4 justify-content-end">
									<button class="btn btn-danger">Очистити таблицю</button>
								</form>
								<form method="POST" action="delete_info_num.php" class="mt-4 d-flex flex-column col-8 justify-content-end">
									<input type="text" name="num" placeholder="Номер">
									<button class=" mt-3 btn btn-success">Видалити за номером</button>

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