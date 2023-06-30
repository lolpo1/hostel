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
					<div class="wrapper p-3 col-12 text-center">				
						<h4>Ласкаво просимо на сайт гуртожитку</h4>
						<p>На території університету розташовано 20 гуртожитків, у яких мешкає понад 13 000 студентів. Гуртожитки студмістечка за призначенням діляться на 17 гуртожитків для одинаків, 2 сімейні гуртожитки та 1 гуртожиток для проживання аспірантів. Гуртожитки для одинаків є коридорного типу та блочного типу. Кімнати розраховані на проживання 3-4 особи. У гуртожитках коридорного типу санвузли та кімнати з умивальниками розташовані на кожному поверсі в обох кінцях коридору. У гуртожитках блокового типу блок складається із двох або п'яти кімнат. У кожному блоці окремі санвузол і душові. У гуртожитках, де блок складається із п'яти кімнат, кухня знаходиться в блоці, а в інших на кожному поверсі. У сімейних гуртожитках кімнати мають планування однокімнатних квартир.</p>
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