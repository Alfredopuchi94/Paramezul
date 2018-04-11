
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
		<?php require_once 'menu.php'; ?>
	</header><!-- /header -->

	<div class="container">
		<div class="row my-5">
			<div class="col-md-8 offset-md-2 my-5">
				<div class="row">
					<div class="mx-auto">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalservice">
						  Solicitud
						</button>
					</div>
					<!-- Modal 1 -->
						<div class="modal fade" id="modalservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
									<form class="form-horizontal" id="form_servicio">
						      	<div class="modal-header">
						        <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: rgb(25, 144, 206);">
											Servicio
										</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
									</div>
						      	<div class="modal-body" style="background-color: rgba(25, 144, 206,.3);">
						      	 	<div class="container">
												<div class="row">
													<div class="col-md-8 offset-md-2">
															<div id="form_message"></div>

															<input
																type="hidden"
																name="email"
																id="email"
																value="<?php echo $_COOKIE["email"]; ?>"
															>

														  <div class="form-group">
																<label for="telf_contacto">Telefono</label>
																	<input
																	type="text"
																	class="form-control"
																	name="telf_contacto"
																	id="telf_contacto"
																	placeholder="Al cual sera contactado">
															</div>

															<div class="form-group">
														    <label for="ubicacion">Ubicacion</label>
														    <textarea class="form-control" name="ubicacion" id="ubicacion" placeholder="Ubicacion" rows="3"></textarea>
														  </div>

															<div class="form-group">
														    <label for="tipo">Tipo de servicio</label>
														    <select class="form-control" id="tipo" name="tipo">
														      <option value="basico">Basico</option>
														      <option value="avanzado">Avanzado</option>
														    </select>
														  </div>
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
	<script src="src/app_api/modules/cliente/controller.js"></script>
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
