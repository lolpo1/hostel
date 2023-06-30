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
	<title>Хостел</title>
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
					<h1>Предмети</h1> 
					<div class="wrapper p-3 col-12 text-center">				
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item" role="presentation">
						    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Вчитель-курс</button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Студент-курс</button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Предмет-курс</button>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						  		<div class="wrapper p-3 col-12 text-center mt-3">
						  			<table class="table table-striped table-hover">
						  			  	<thead>
						  			    	<tr>
						  			      		<th scope="col">#</th>
						  			      		<th scope="col">Прізвище</th>
						  			      		<th scope="col">Предмет</th>
						  			      		<th scope="col">Назва курсу</th>
						  			  		</tr>
						  			  	</thead>
						  			  	<tbody>
						  			  		<?php 
						  						$categories = get_categories($link,"teacher_class"); ?>
						  					<?php foreach ($categories as $teacher_class): ?>
						  			    	<tr>
						  			      		<th scope="row"><?=$teacher_class["id"] ?></th>
								  			    <td><?=$teacher_class["sername"] ?></td>
								  			    <td><?=$teacher_class["subject"] ?></td>
								  			    <td><?=$teacher_class["classname"] ?></td>
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
							  				<form method="POST" action="add_teacher_class.php" class="d-flex flex-column col-12">
							  					<div class="d-flex row">
							  						<div class="col-4 d-flex flex-column justify-content-end">
							  							<h4>Прізвище</h4>
							  							<input type="text" name="sername" placeholder="Прізвище">
							  						</div>
							  						<div class="col-4 d-flex flex-column justify-content-end">
							  							<h4>Предмет</h4>
							  							<input type="text" name="subject" placeholder="Предмет">
							  						</div>
							  						<div class="col-4 d-flex flex-column justify-content-end">
							  							<h4>Назва курсу</h4>
							  							<input type="text" name="classname" placeholder="Назва курсу">
							  						</div>
							  					</div>				  					
							  					<button class="mt-3 btn btn-primary">Введення даних</button>
							  				</form>
							  			</div>
							  		</div>
							  		<div class="container">
							  			<div class="row p-3">
							  				<form method="POST" action="delete_teacher_class.php" class="d-flex flex-column col-4 justify-content-end">
							  					<button class="btn btn-danger">Очистити таблицю</button>
							  				</form>
							  				<form method="POST" action="delete_teacher_class_num.php" class="mt-4 d-flex flex-column col-8 justify-content-end">
							  					<input type="text" name="num" placeholder="Номер">
							  					<button class=" mt-3 btn btn-success">Видалити за номером</button>
							  				</form>
							  			</div>
							  		</div>
							  		<?php endif; ?>
						  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  		  		<div class="wrapper p-3 col-12 text-center mt-3">
				  		  			<table class="table table-striped table-hover">
				  		  			  	<thead>
				  		  			    	<tr>
				  		  			      		<th scope="col">#</th>
				  		  			      		<th scope="col">Прізвище</th>
				  		  			      		<th scope="col">Ім'я</th>
				  		  			      		<th scope="col">Назва курсу</th>
				  		  			  		</tr>
				  		  			  	</thead>
				  		  			  	<tbody>
				  		  			  		<?php 
				  		  						$categories = get_categories($link,"student_class"); ?>
				  		  					<?php foreach ($categories as $student_class): ?>
				  		  			    	<tr>
				  		  			      		<th scope="row"><?=$student_class["id"] ?></th>
				  				  			    <td><?=$student_class["sername"] ?></td>
				  				  			    <td><?=$student_class["name"] ?></td>
				  				  			    <td><?=$student_class["classname"] ?></td>
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
				  			  				<form method="POST" action="add_student_class.php" class="d-flex flex-column col-12">
				  			  					<div class="d-flex row">
				  			  						<div class="col-4 d-flex flex-column justify-content-end">
				  			  							<h4>Прізвище</h4>
				  			  							<input type="text" name="sername" placeholder="Прізвище">
				  			  						</div>
				  			  						<div class="col-4 d-flex flex-column justify-content-end">
				  			  							<h4>Ім'я</h4>
				  			  							<input type="text" name="name" placeholder="Ім'я">
				  			  						</div>
				  			  						<div class="col-4 d-flex flex-column justify-content-end">
				  			  							<h4>Назва курсу</h4>
				  			  							<input type="text" name="classname" placeholder="Назва курсу">
				  			  						</div>
				  			  					</div>				  					
				  			  					<button class="mt-3 btn btn-primary">Enter data</button>
				  			  				</form>
				  			  			</div>
				  			  		</div>
				  			  		<div class="container">
				  			  			<div class="row p-3">
				  			  				<form method="POST" action="delete_student_class.php" class="d-flex flex-column col-4 justify-content-end">
				  			  					<button class="btn btn-danger">Очистити таблицю</button>
				  			  				</form>
				  			  				<form method="POST" action="delete_student_class_num.php" class="mt-4 d-flex flex-column col-8 justify-content-end">
				  			  					<input type="text" name="num" placeholder="Number">
				  			  					<button class=" mt-3 btn btn-success">Видалити за номером</button>
				  			  				</form>
				  			  			</div>
				  			  		</div>
				  			  		<?php endif; ?>
				  		  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  		  		<div class="wrapper p-3 col-12 text-center mt-3">
				  		  			<table class="table table-striped table-hover">
				  		  			  	<thead>
				  		  			    	<tr>
				  		  			      		<th scope="col">#</th>
				  		  			      		<th scope="col">Предмет</th> 		
				  		  			      		<th scope="col">Назва курсу</th>
				  		  			      		<th scope="col">Ім'я вчителя</th>
				  		  			  		</tr>
				  		  			  	</thead>
				  		  			  	<tbody>
				  		  			  		<?php 
				  		  						$categories = get_categories($link,"subject_class"); ?>
				  		  					<?php foreach ($categories as $subject_class): ?>
				  		  			    	<tr>
				  		  			      		<th scope="row"><?=$subject_class["id"] ?></th>
				  				  			    <td><?=$subject_class["subject"] ?></td>
				  				  			    <td><?=$subject_class["classname"] ?></td>
				  				  			    <td><?=$subject_class["teachername"] ?></td>
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
				  			  				<form method="POST" action="add_subject_class.php" class="d-flex flex-column col-12">
				  			  					<div class="d-flex row">
				  			  						<div class="col-4 d-flex flex-column justify-content-end">
				  			  							<h4>Предмет</h4>
				  			  							<input type="text" name="subject" placeholder="Предмет">
				  			  						</div>
				  			  						<div class="col-4 d-flex flex-column justify-content-end">
				  			  							<h4>Назва курсу</h4>
				  			  							<input type="text" name="classname" placeholder="Назва курсу">
				  			  						</div>
				  			  						<div class="col-4 d-flex flex-column justify-content-end">
				  			  							<h4>Ім'я вчителя</h4>
				  			  							<input type="text" name="teachername" placeholder="Ім'я вчителя">
				  			  						</div>
				  			  					</div>				  					
				  			  					<button class="mt-3 btn btn-primary">Додати запис</button>
				  			  				</form>
				  			  			</div>
				  			  		</div>
				  			  		<div class="container">
				  			  			<div class="row p-3">
				  			  				<form method="POST" action="delete_subject_class.php" class="d-flex flex-column col-4 justify-content-end">
				  			  					<button class="btn btn-danger">Очистити таблицю</button>
				  			  				</form>
				  			  				<form method="POST" action="delete_subject_class_num.php" class="mt-4 d-flex flex-column col-8 justify-content-end">
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