<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Cliente</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="//src/assets/css/app.css">
	<script src="https://use.fontawesome.com/54fbcaa374.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto"> -->
    	       <a class="navbar-brand" href="#">
    <img src="src/assets/img/logo.png" width="40" height="40" alt="">
  </a>
    	<ul class="navbar-nav mr-auto">
		      <li class=" nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class=" nav-item">
		        <a class="nav-link" href="#">¿Quienes Somos?</a>
		      </li>
		      <li class=" nav-item">
		        <a class="nav-link" href="#">Servicios</a>
		      </li>
		      <li class=" nav-item">
		        <a class="nav-link" href="#">Nuestro Equipo</a>
		      </li>
		      <li class=" nav-item">
		        <a class="nav-link" href="#">Contacto</a>
		      </li>
		    </ul>
		    <ul class="navbar-nav">
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Iniciar Sesion
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="./adminlogin">Administrador</a>
		          <a class="dropdown-item" href="./login">Cliente</a>
		        </div>
		      </li>
		  </ul>
  </div>
</nav>
	</header><!-- /header -->
<div class="container">

		<div class="row mb-5 mx-auto mt-5">
			<div class="col-md-8 offset-md-2">
				<form id="form_create" name="form_create">
					<h3 class="text-center"><strong>Registro</strong></h3>
					<div class="form-row mt-4">
					<div class="col">
					<label for="fname">Nombre:</label>
				    <input 
				    	type="text" 
				    	class="form-control" 
				    	name="fname"
				    	id="fname" 
				    
				    	placeholder="Carlos">
				    	<div class="invalid-feedback">
				        The FIRST NAME is invalid
				      </div>
				      </div>
			  		<div class="col">
					<label for="lname">Apellido:</label>
				    <input 
				    	type="text" 
				    	class="form-control" 
				    	name="lname" 
				    	id="lname" 
				    	required
				    	placeholder="Romero">
				    	<div class="invalid-feedback">
				        The LAST NAME is invalid
				      </div>
				  </div>
				  </div>
					<div class="form-group mt-3">
					<label for="email">Correo Electronico:</label>
				    <input 
				    	type="email" 
				    	class="form-control" 
				    	name="email" 
				    	id="email" 
		                required
				    	placeholder="email@ejemplo.com">
				    	<div class="invalid-feedback">
				        The EMAIL is invalid
				      </div>
				  </div>
					<div class="form-group">
					<label for="pass">Contraseña:</label>
				    <input 
				    	type="password" 
				    	class="form-control" 
				    	name="pass" 
				    	id="pass" 
				    	required
				    	placeholder="Ingrese una contraseña de al menos 6 caracteres">
				    	<div class="invalid-feedback">
				        The PASSWORD is invalid
				        <ul>
				        	<li>at least 8 characters</li>
				        	<li>must contain at least 1 uppercase letter, 1 lowercase letter, and 1 number</li>
				        	<li>Can contain special characters</li>
				        </ul>
				      </div>
				  </div>
					<div class="form-group">
					<label for="tlf">Telefono celular:</label>
				    <input 
				    	type="tel"
				    	class="form-control" 
				    	name="tlf" 
				    	id="tlf" 
				    	maxlength="11" 
				    	placeholder="0412-1549524">
				    	<div class="invalid-feedback">
				        The PHONE is invalid
				      </div>
				  </div>
				  
					<button type="submit" class="btn btn-dark btn-block" method="post"><span id="sub">Enviar</span></button>
				</form>
			</div>
		</div>


 

	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="src/app_api/modules/cliente/controller.js"></script>
	<script src="src/assets/js/jquery.validate.min.js"></script>
	<script src="src/assets/js/validations.js"></script>
	
</body>
</html>