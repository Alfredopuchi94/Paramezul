
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Paramezul</title>	
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="./src/assets/css/app.css">
	<link rel="stylesheet" href="./src/assets/css/animate.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
</head>  
<body>
	<div class="barra">
		<div class="row mr-0">
				<div class="col-xs-4 col-sm-4 col-md-4 linia1"></div>
				<div class="col-xs-4 col-sm-4 col-md-4 linia2"> </div>
				<div class="col-xs-4 col-sm-4 col-md-4 linia3"> </div>
		</div>
	</div> 
	<div class=" container container-1">
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
	<div class="btn fixed-bottom w-25 mb-4 btnserv mx-auto">
		<a class="navbar-brand text-white" href="<?php if ($_COOKIE['email']) { ?>servicio <?php }else{echo "#";} ?>">Servicios de ambulancias</i></a>
	</div>
	
	
	<div class="carpuselEdit">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
			    <li style="background-color: transparent;" data-target="#demo" data-slide-to="0"></li>
			    <li style="background-color: transparent;" data-target="#demo" data-slide-to="1"></li> 
			 </ul>
		  	<div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="src/assets/img/ambulancia1.jpg" alt="Los Angeles">
			      <div class="carousel-caption">
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="src/assets/img/ambulancia2.jpg" alt="Chicago">
			      <div class="carousel-caption">
			      </div>   
			    </div>
		  	</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<div class="container animated zoomIn" style="margin-top: -175px;">
	    	<div class="row">
	    		<div class="col-xs-12 col-sm-12 col-md-4 pr-0">
	    			<div class="card text-center bgcarousel">
					  <div class="card-body tra">
					    <h3 class="card-title text-white font-weight-bold">Traslados</h3>
					    <h4 class="card-text text-white">Basico y Avanzado</h4>
					  </div>
					</div>
					  <div class="card-footer linia1"></div>
	    		</div>
	    		<div class="col-xs-12 col-sm-12 col-md-4 pr-0 pl-0">
	    			<div class="card text-center bgcarousel2">
					  <div class="card-body tra">
					    <h3 class="card-title text-white font-weight-bold">UCI</h3>
					    <h4 class="card-text text-white">Movil</h4>
					  </div>
					</div>
					  <div class="card-footer linia2" style="height: 10px;"></div>
	    		</div>
	    		<div class="col-xs-12 col-sm-12 col-md-4 pl-0">
	    			<div class="card text-center bgcarousel3">
					  <div class="card-body tra">
					    <h3 class="card-title text-white font-weight-bolds">Guardias</h3>
					    <h4 class="card-text text-white">Preventivas</h4>
					  </div>
					</div>
					  <div class="card-footer linia3" style=""></div>
	    		</div>
	    	</div>
		</div>
	</div><br>

	<div class="row mt-5 pt-5 mb-5 pb-5 mr-0 ml-0">
		<div class="col-lg-12 col-md-12">
			<h1 style="color: #02B8BF; font-size: 4.0rem;" class="text-center font-weight-bold animated fadeInUp">¿Quienes Somos?</h1><br><br>
			<p style="color: #02B8BF; text-align: center;"><i class="animated fadeInUp far fa-question-circle"></i></p>
			<div class="row justify-content-center mt-5">
				<div class="col-lg-4 col-md-4 text-justify">
					<p>Somos una empresa lider en alquiler de ambulancias y traslados de emergencia.</p>

	​				<p>Ofrecemos asistencia medica domiciliaria (Soporte Básico y Avanzado UCI MOVIL) para traslados de pacientes, Desde Clínicas hacia hospitales y domicilios (viceversa). Realizamos traslados aereos.</p>

	 				<p>Trasladamos pacientes en cama y convalecientes para hacer diligencias, bancos, visitas, etc. Guardias preventivas en eventos sociales, sitios de trabajos, construcciones, instalaciones petroleras.</p>
				</div> 
				<div class="separator mr-5 ml-5"></div>
				<div class="col-lg-4 col-md-4 text-justify">
					<p>Nuestro personal esta capacitado para atender las victimas de un accidente y/o enfermedades de aparición brusca las cuales se estabilizan y se trasladan hasta el centro hospitalario más cercano, también contamos con medicamentos y primeros auxilios.</p>

	 				<p>Nuestras unidades están dotadas con todos los equipos de soporte avanzado para adultos y neonatos (incubadora).</p>
				</div>
			</div>
		</div>
	</div><br><br>

	<div class="row mr-0 ml-0 bg-ser" >
		<div class="col-lg-12 col-md-12 servicios">
			<h1 style="color: white; font-size: 4.0rem; padding-top: 80px;" class="text-center  font-weight-bold">Servicios</h1>
			<p style="color: white; text-align: center; padding-bottom: 70px; padding-top: 20px;"><i class="animated fadeInUp fas fa-info-circle" ></i></p>
			<div class="row justify-content-center text-white">
				<div class="col-lg-4 col-md-4 mb-4">
					<div class="card text-center h-100" style="background-color: rgba(144, 175, 196, 0.4)">
		  				<div class="card-body">
		   					 <h4 class="font-weight-bold">UCI Movil</h4>
		   					 <p>Nuestras ambulancias estan capacitadas como Unidades de Cuidado Intensivo moviles para el cuidado de pacientes en estado critico.</p>
		  				</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-4">
					<div class="card text-center h-100" style="background-color: rgba(144, 175, 196, 0.4)">
		  				<div class="card-body">
		   					<h4 class="font-weight-bold">Traslados Terrestres</h4>
		   					<p>Nos especializamos en traslados terrestres a todo el territorio nacional en unidades de primera categoria.</p>
		  				</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center text-white">
				<div class="col-lg-4 col-md-4 mb-4">
					<div class="card text-center h-100" style="background-color: rgba(144, 175, 196, 0.4)">
		  				<div class="card-body">
		   					 <h4 class="font-weight-bold">Emergencias</h4>
		   					 <p> Contamos con medicamentos y primeros auxilios para tratar victimas de accidentes y/o enfermedades de aparicion brusca.</p>
		  				</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-4">
					<div class="card text-center h-100" style="background-color: rgba(144, 175, 196, 0.4)">
		  				<div class="card-body">
		   					 <h4 class="font-weight-bold">Traslados Aereos</h4>
		   					 <p>Estamos capacitados y preparados para realizar traslados aereos nacionales e internacionales.</p>
		  				</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center text-white">
				<div class="col-lg-4 col-md-4 ">
					<div class="card text-center h-100" style="background-color: rgba(144, 175, 196, 0.4)">
		  				<div class="card-body">
		   					 <h4 class="font-weight-bold">Guardias Preventivas</h4>
		   					 <p>Atendemos eventos sociales, sitios de trabajo, construcciones, instalaciones petroleras, y mas.</p>
		  				</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="card text-center h-100" style="background-color: rgba(144, 175, 196, 0.4)">
		  				<div class="card-body">
		   					 <h4 class="font-weight-bold">Cuidados en Casa</h4>
		   					 <p>Servcio medico en su domicilio o sitio de trabajo. Contamos con  medicamentos y personal calificado para atenderle.</p>
		  				</div>
					</div>
				</div>
			</div>
			<div style="margin-bottom: 100px;"></div>
		</div>
	</div>

	<div class="row mr-0 ml-0">
		<div class="col-sm-12 col-md-12" style="background-color: rgba(7, 188, 131, 1);">
			<div class="row justify-content-center pt-4 pb-4 text-white text-center">
				<div class="col-sm-2 col-md-2 pr-3">
					<h1 class="font-weight-bold" style="font-size: 3.3rem">1</h1>
					<h5>Empresa Lider</h5>
				</div>
				<div class="col-sm-2 col-md-2 pr-3 pl-3">
					<h1 class="font-weight-bold" style="font-size: 3.3rem">10</h1>
					<h5>Año de Experiencia</h5>
				</div>
				<div class="col-sm-2 col-md-2 pr-3 pl-3">
					<h1 class="font-weight-bold" style="font-size: 3.3rem">26</h1>
					<h5>Expecialista de Salud</h5>
				</div>
				<div class="col-sm-2 col-md-2 pl-3">
					<h1 class="font-weight-bold" style="font-size: 3.3rem">1</h1>
					<h5>Mision: Usted y Su familia</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5 pt-5 mb-5 pb-5 mr-0 ml-0">
		<div class="col-lg-12 col-md-12">
			<h1 style="color: #02B8BF; font-size: 4.0rem;" class="text-center font-weight-bold animated fadeInUp">Nuestro Equipo</h1><br><br>
			<p style="color: #02B8BF; text-align: center;"><i class="animated fadeInUp fas fa-user"></i></p>

			<div class="row justify-content-center mt-5">
				<div class="col-lg-3 col-md-3 text-justify">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="./src/assets/img/photo.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Gladys Sanchez</h5>
					    <p class="card-text">Directora General</p>
					
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 text-justify">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="./src/assets/img/photo.png" alt="Card image cap">
					  <div class="card-body text-center">
					    <h5 class="card-title">David Sanchez</h5>
					    <p class="card-text">Paramedio y Gerente General</p>
					    
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 text-justify">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="./src/assets/img/photo.png" alt="Card image cap">
					  <div class="card-body text-center">
					    <h5 class="card-title">Katerine Gomez</h5>
					    <p class="card-text">Enfermera</p>
					    
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

		


<!-- -0-0-0-0-0-0-0-0-0-0-0-0-0-  SCRIPT  -0-0-0-0-0-0-0-0-0-0-0-0-0- --> 
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script>
		$('.carousel').carousel()
	</script>
</body>
</html>
