
<?php 
session_start();
		$status = false;

		if (!$_SESSION == []) {
			$status = true;
		} else {
			if ( $_COOKIE['email'] != null) {
				$_SESSION['fname'] = $_COOKIE['fname'];
				$_SESSION['lname'] = $_COOKIE['lname'];
				$_SESSION['email'] = $_COOKIE['email'];
				$_SESSION['type'] = $_COOKIE['type'];
				$status = true;
			} else {
				$status=false;
			}
		}
		?>
<?php 
if ($_COOKIE['email']) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Servicio</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="./src/assets/css/app.css">
	<script src="https://use.fontawesome.com/19ab435e7e.js"></script>
</head>
<body>
	<?php include "src/app_api/config/connection.php" ?>
	<header>
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
  <h3 class="navbar-brand justify-content-center mx-auto" href="/">Paramezul</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto"> -->
    	<ul class="navbar-nav ">
		      <li class=" nav-item">
		        <a class="nav-link" href="#"><span class="fa fa-home"> Home</span></a>
		      </li>
		 </ul>
		<ul class="navbar-nav ">
			<form class="form-inline">
				<?php if ($status) { ?>
					<div class="input-group">
						<input type="text" value="Hi <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?>" class="form-control text-center" readonly>
			      <span class="input-group-btn">
			        <a href="./logout" class="btn btn-outline-danger">Cerrar Sesión</a>
			      </span>
			    </div>
				<?php } ?>
			</form>
    	</ul>
  </div>
</nav>
	</header>

	<div class="container">
		<div class="row my-5">
			<div class="col-md-8 offset-md-2 my-5">
				<div class="row">
				<div class="mx-auto">	
				<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
					  Servicio Basico
					</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
					  Servicio Avanzado 
					</button>
				</div>

					<!-- Modal 1 -->
					<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: rgb(25, 144, 206);">Servicio Basico</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      	<div class="modal-body" style="background-color: rgba(25, 144, 206,.3);">
					      	 	<div class="container">
									<div class="row">
										<div class="col-md-8 offset-md-2">
											<form class="form-horizontal" id="formservicio" action="src\app_api\php\datos.php" method="post" name="formservicio">
												<div id="form_message"></div>
												<div class="form-group">
													<input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" value="<?php echo $_SESSION["fname"].' '.$_SESSION['lname'] ?>" disabled>
												</div>
											    <div class="form-group">
													<input type="text" class="form-control" name="nombre_pasiente" id="nombre_pasiente" placeholder="Nombre del paciente ">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="diagnostico" id="diagnostico" placeholder="Diagnostico">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="ubi_salida" id="ubi_salida" placeholder="ubicacion salida">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="ubi_destino" id="ubi_destino" placeholder="ubicacion destino ">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
												</div>	
												<input type="hidden" name="type" value="basico">
											</div>
					     	 			</div>
					     	 		</div>
					     		</div>
					      <div class="modal-footer">
					      	<input type="hidden" name="id" value="formservicio">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					        <button type="submit" class="btn btn-primary">Solicitar</button>
					      </div>
					  </form>
					    </div>
					  </div>
					</div>
					<!-- Modal 2 -->
					<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle" style="color: rgb(2, 184, 191);"> Servicio Avanzado</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      	<div class="modal-body">
					      	 	<div class="container">
									<div class="row">
										<div class="col-md-8 offset-md-2">
											<form class="form-horizontal" id="Usuarios" action="src/app_api/php/datos.php" method="post" name="Usuarios">
												<div id="form_message"></div>
												<div class="form-group">
													<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y Apellido">
												</div>
											    <div class="form-group">
													<input type="text" class="form-control" name="email" id="email" placeholder="Nombre del paciente ">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="email" id="email" placeholder="Diagnostico">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="email" id="email" placeholder="ubicacion salida">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="email" id="email" placeholder="ubicacion destino ">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="email" id="email" placeholder="Telefono">
												</div>
												<input type="hidden" name="type" value="avanzado">	
											</div>
					     	 			</div>
					     	 		</div>
					     		</div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					        <button type="submit" class="btn btn-primary">Solicitar</button>
					      </div>
					  </form>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- -o-o-o-o-o-o-o-o-o- SCRIPT -o-o-o-o-o-o-o-o-o- -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="">
		$('#myModal').on('shown.bs.modal', function () {
  			$('#myInput').trigger('focus')
		})
	</script>
</body>
</html>
<?php } else {
	header("Location: http://apppaj.000webhostapp.com");
} ?>