
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paramezul</title>	
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="./src/assets/css/app.css">
	
</head>  
<body>
	<div class="barra">
		<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 linia1"></div>
			<div class="col-xs-6 col-sm-6 col-md-6 linia2"> </div>
				<div class="col-xs-3 col-sm-3 col-md-3 linia3"> </div>
			</div>
	</div> 
	<div class=" container container-1 ">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3  d-flex justify-content-center ">
					<img src="./src/assets/img/logo.png" alt="">

				</div>
				<div class=" col-xs-6 col-sm-6 col-md-6  c-2 text-center">
					<h1><strong>PARAMEZUL C. A.</strong></h1>
				<h5>Traslados Paramedicos del Zulia</h5>
	​				<h5>Ambulancias en Maracaibo - Servicio a toda Venezuela</h5><br>
				<a class="correo" href="">  paramezul@gmail.com </a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 c-3">
					<h4><strong>LLAMENOS AHORA:</strong></h4>	 
				<h5>0414-603 91 71</h5>
				<h5>0426-962 36 28</h5>
				<h5>0424-603 94 83</h5>
				<h5>0261-719 10 74</h5>
				</div>
			</div>
	</div>
<header>
	<?php require_once 'menu.php'; ?>
</header><!-- /header -->

	<a class="navbar-brand" href="<?php if ($_COOKIE['email']) { ?>servicio <?php }else{echo "#";} ?>">Servicios de ambulancias</i></a>


	<!-- <div class="container-2" ">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="..." alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="..." alt="Third slide">
		    </div>
		  </div>
		</div>
	</div> -->
	


<!-- -0-0-0-0-0-0-0-0-0-0-0-0-0-  SCRIPT  -0-0-0-0-0-0-0-0-0-0-0-0-0- --> 
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
