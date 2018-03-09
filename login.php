<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
		<link rel="stylesheet" href="./src/assets/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<script src="https://use.fontawesome.com/e7cf633633.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
  <a class="navbar-brand" href="/">Paramezul</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto"> -->
    	<ul class="navbar-nav">
		      <li class=" nav-item">
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
  </div>
</nav>
	</header><!-- /header -->
	<div class="container text-center">
		<div class="row mt-2">
			<div class="col-md-8 offset-md-2">
				<div class="row">
					<div class="col-md-12">
						<form id="form_login_cliente" class="form-signin">
							<img class="mb-4" src="src/assets/img/logo.png" alt="" width="82" height="82">
							<h1 class="h3 mb-3 font-weight-normal">Por favor ingrese</h1>
							<div id="form_message_cliente"></div>
							<label for="email" class="sr-only"></label>
				
								
								<input
									type="email"
									class="form-control"
									name="email"
									id="email_cliente"
									placeholder="Correo Electronico">
									<div class="invalid-feedback">
										The EMAIL is invalid
									</div>
				
								<label for="pass_cliente" class="sr-only"></label>
								<input
									type="password"
									class="form-control"
									name="pass"
									id="pass_cliente"
									placeholder="Contraseña">
									<div class="invalid-feedback">
										The PASSWORD is invalid
										<ul>
											<li>at least 8 characters</li>
											<li>must contain at least 1 uppercase letter, 1 lowercase letter, and 1 number</li>
											<li>Can contain special characters</li>
										</ul>
									</div>
										<br>
							<button type="submit" class="btn btn-dark btn-block"><span id="cliente_sub">Ingresar</span></button>
						</form>
						<a href="#" data-toggle="modal" data-target="#client_recovery" class="text-center d-block">Olvide mi contraseña</a>

											<br>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Client Recovery -->
	<div class="modal fade" id="client_recovery" tabindex="-1" role="dialog" aria-labelledby="client_recovery" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="client_recovery">Recovery Password</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
				<form id="recovery_form_client">
		      <div class="modal-body">
							<div class="form-group">
						    <input
						    	type="email"
						    	class="form-control"
						    	name="email"
						    	id="emailRC"
						    	placeholder="Email">
						    	<div class="invalid-feedback">
						        The EMAIL is invalid
						      </div>
						  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Recovery</button>
		      </div>
				</form>
	    </div>
	  </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="./src/app_api/modules/cliente/controller.js"></script>
</body>
</html>