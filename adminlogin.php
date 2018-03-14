<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login | Administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="./src/assets/css/app.css">
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
				      <li class=" nav-item menuadmin">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class=" nav-item menuadmin">
				        <a class="nav-link" href="#">¿Quienes Somos?</a>
				      </li>
				      <li class=" nav-item menuadmin">
				        <a class="nav-link" href="#">Servicios</a>
				      </li>
				      <li class=" nav-item menuadmin">
				        <a class="nav-link" href="#">Nuestro Equipo</a>
				      </li>
				      <li class=" nav-item menuadmin">
				        <a class="nav-link" href="#">Contacto</a>
				      </li>
				    </ul>
		  </div>
		</nav>
	</header><!-- /header -->
	<div class="container">
		<div class="row my-5">
			<div class="col-md-8 offset-md-2 my-5">
				<div class="row">
					<div class="col-md-12">
						<form id="form_login_admin">
							<div id="form_message_admin"></div>
							<div class="form-group">
								<input
									type="email"
									class="form-control"
									name="email"
									id="email_admin"
									placeholder="Email">
									<div class="invalid-feedback">
										The EMAIL is invalid
									</div>
							</div>
							<div class="form-group">
								<input
									type="password"
									class="form-control"
									name="pass"
									id="pass_admin"
									placeholder="Password">
									<div class="invalid-feedback">
										The PASSWORD is invalid
										<ul>
											<li>at least 8 characters</li>
											<li>must contain at least 1 uppercase letter, 1 lowercase letter, and 1 number</li>
											<li>Can contain special characters</li>
										</ul>
									</div>
							</div>
							<button type="submit" class="btn btn-dark btn-block"><span id="admin_sub">Administrador</span></button>
						</form>
						<br>
						<a href="#" data-toggle="modal" data-target="#client_recovery" class="text-left d-block">Olvide mi contraseña</a>
					</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="./src/app_api/modules/admin/controller.js"></script>
</body>
</html>