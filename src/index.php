<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>DEMO COGNITO</title>

</head>
<body>
	<?php include 'navbar.php'?>
	<br>
	<div style="background: #e6faff;" class="container p-5">
		<h2>Demo AWS Cognito con PHP y Cambios desde Github con CICD</h2>
		<br>
		<div id="demo" class="carousel slide" data-bs-ride="carousel">

			  <!-- Indicators/dots -->
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
			  </div>

			  <!-- The slideshow/carousel -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/1.png" class="d-block w-100">
			    </div>
			    <div class="carousel-item">
			      <img src="img/2.png" class="d-block w-100">
			    </div>
			    <div class="carousel-item">
			      <img src="img/3.png" class="d-block w-100">
			    </div>
			  </div>

			  <!-- Left and right controls/icons -->
			  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </button>
		</div>
	</div>

	<?php include 'footer.php'?>
</nav>
</body>
</html>