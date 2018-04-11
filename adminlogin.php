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
		<?php require_once 'menu.php'; ?>
	</header><!-- /header -->
<div class="container text-center">
    <form id="form_login_admin" name="form_login_admin" class="form-signin" method="POST">
      <img class="mb-4" src="src/assets/img/logo.png" alt="" width="82" height="82">
      <h1 class="h3 mb-3 font-weight-normal">Administrador</h1>
      <label for="email" class="sr-only"></label>
      <input type="email" name="email" id="email_admin" class="form-control" placeholder="Correo electronico" required>
      <div class="help-block with-errors"></div>
      <label for="pass_cliente" class="sr-only">Contraseña</label>
      <input type="password" name="pass" id="pass_admin" class="form-control"  placeholder="Contraseña" required>
      <div class="checkbox mb-3">
 
      </div>
    <button type="submit" class="btn btn-dark btn-block" href="client.php"><span id="admin_sub">Entrar</span></button>
      			<br>
						<a href="#" data-toggle="modal" data-target="#client_recovery" class="text-left d-block">Olvide mi contraseña</a>
						<br>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="src/app_api/modules/admin/controller.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="src/assets/js/validations.js"></script>
</body>
</html>