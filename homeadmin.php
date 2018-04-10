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
		$con = new mysqli('mysql.hostinger.es', 'u420574110_param', '123456', 'u420574110_param');
		$cli = $con->query("SELECT * FROM cliente");
		$datos2 = $con->query("SELECT * FROM ambulancia");
		$ambucuenta = $con->query("SELECT COUNT(*) as cuenta FROM ambulancia");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | Administrador</title>
	<link rel="stylesheet" href="./src/assets/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!-- <script src="https://use.fontawesome.com/54fbcaa374.js"></script> -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="./src/assets/css/sidebar-style.css">
	<link rel="stylesheet" href="./src/assets/css/docs.css">
	<link rel="stylesheet" href="./src/assets/css/bootstrap-notifications.css">

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
	<nav id="menu" class="panel" role="navigation" style="background-color: white;">
		<h4 class="mt-4 text text-center">Menu Principal</h4>
		<ul class="list-group list-group-flush" style="background-color:rgba(23, 164, 186, 0.54)">
		  <li class="list-group-item">
				<a class="nav-link hvr-underline-from-center" id="inicio" data-toggle="tab" href="#ini" role="tab" aria-controls="ini" aria-selected="true">
					<span data-feather="home"></span>
					Inicio <span class="sr-only">(current)</span>
				</a>
			</li>
		  <li class="list-group-item">
				<a class="nav-link" id="ambulancia" data-toggle="tab" href="#ambu" role="tab" aria-controls="ambu" aria-selected="false">
					Gestion de Ambulancias
				</a>
			</li>
			<li class="list-group-item">
				<a class="nav-link" id="cliente" data-toggle="tab" href="#clien" role="tab" aria-controls="clien" aria-selected="false">
					Clientes
				</a>
			</li>
		</ul>
	</nav>

	<div class="wrap push">
		<nav class="navbar navbar-dark bg-info sticky-top justify-content-between">
		  <button class="menu-link navbar-toggler" type="button" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
			</button>

			<div class="dropdown show mr-4">
			  	<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></a>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="#">Perfil</a>
				    <a class="dropdown-item" href="#">Registrar Usuario</a>
				    <div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="./logout">Cerrar Sesión</a>
			  	</div>
			</div>
    </nav>

		<div class="container-fluid">
			<div class="row">
      	<div class="col-md-8 col-sm-12 order-sm-2 order-1 mt-4 mx-auto">
					<h2 class="text-center">PARAMEZUL</h2><hr>
      		<div class="tab-content " id="myTabContent"><!-- PANELES DENTRO DE TAB-CONTEN -->
						<!-- ****************** PANEL DE INICIO ****************** -->
						<div class="tab-pane fade show active" id="ini" role="tabpanel" aria-labelledby="inicio" style="background: white;">
					 		<div class="row">
					 			<div class="col-md-4 col-sm-12 mt-4" style="width: 250px;">
					 				<div class="card border-info text-info">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-ambulance fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  					<?php 
								  					$resultadoambu = mysqli_fetch_array($ambucuenta); ?>
								  					<div class="huge"><?php echo $resultadoambu['cuenta']; ?></div>
								  					<div>Ambulancias</div>
								  				</div>
								  			</div>
								  		</div>
									</div>
					 			</div>
					 			<div class="col-md-4 col-sm-12 mt-4" style="width: 250px;">
					 				<div class="card border-warning text-warning">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-users fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  						<?php 
								  						$cliencuenta = $con->query("SELECT COUNT(*) as cuenta FROM cliente");
								  						$resultclient = mysqli_fetch_array($cliencuenta); ?>
								  					<div class="huge"><?php echo $resultclient['cuenta']; ?></div>
								  					<div>Clientes</div>
								  				</div>
								  			</div>
								  		</div>
								  		
									</div>
					 			</div>
					 			<div class="col-md-4 col-sm-12 mt-4" style="width: 250px;">
					 				<div class="card border-success text-success">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-cart-plus fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  					<?php 
								  					$servicuenta = $con->query("SELECT COUNT(*) as cuenta FROM notificacion");
								  					$resultserv = mysqli_fetch_array($servicuenta); ?>
								  					<div class="huge"><?php echo $resultserv['cuenta']; ?></div>
								  					<div>Servicios</div>
								  				</div>
								  			</div>
								  		</div>
								  		
									</div>
					 			</div>
					 		</div>
							<br>
						</div>
						<!-- ****************** FIN PANEL DE INICIO ****************** -->

       			<!-- ****************** PANEL DE GESTION DE AMBULANCIA ****************** -->
      			<div class="tab-pane fade bgwhite" id="ambu" role="tabpanel" aria-labelledby="ambulancia" style="background: white;">
	            <h3 class="text-center"><strong>Gestion de Ambulancia</strong></h3><hr>
	            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
	              <li class="nav-item">
	                <a class="nav-link" id="registro" data-toggle="tab" href="#regis" role="tab" aria-controls="regis" aria-selected="active">Registro</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" id="mostrar" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Listado</a>
	              </li>
	            </ul>
	            <div class="tab-content" id="myTabContent">
								<!-- ******************* 1ER TAB ***************** -->
	              <div class="tab-pane fade show active" id="regis" role="tabpanel" aria-labelledby="registro" style="background-color: white;">
	              	<div class="col-md-12">
		                <form id="form_create_ambulancias" name="form_ambulancias" method="post" action="">
		                  <div id="form_message"></div>
		                  <div class="form-group mt-4">
		                    <label for="modelo">Modelo de Ambulancia:</label>
		                    <input type="text" class="form-control" name="modelo" id="modelo" required placeholder="Toyota">
		                  </div>
		                  <div class="form-group">
		                    <label for="placa">Numero de Placa:</label>
		                    <input type="text" class="form-control" name="placa" id="placa" required placeholder="CH540BA">
		                    <div class="invalid-feedback"></div>
		                  </div>
		                  <div class="form-group">
		                    <label for="tipo">Tipo de ambulancia:</label>
		                    <input type="text" class="form-control" name="tipo" id="tipo" required placeholder="Microbus">
		                    <div class="invalid-feedback"></div>
		                  </div>
		                  <div class="text-center">
		                  	<button type="submit" name="submit" class="btn btn-primary mt-4 w-25" method="post" value="Guardar Datos"><span id="sub">Registrar</span></button>
		                  </div>
		                </form>
		            </div>
	              </div>

	              <!-- ******************* 2DO TAB ***************** -->
              	<div class="tab-pane fade show mx-auto" id="profile" role="tabpanel" aria-labelledby="mostrar" style="background-color: white;"><br>
									<div class="table-responsive">
										<table class="table table-striped">
	                  <thead>
	                    <tr class="text-center justify-content-center">
	                      <th class="pr-5" scope="col">#</th>
	                      <th class="pr-5" scope="col">Modelo</th>
	                      <th class="pr-5" scope="col">Numero de placa</th>
	                      <th class="pr-5" scope="col">tipo</th>
	                      <th class="pr-5" scope="col">Acción</th>
	                      </tr>
	                    </thead>
	                    <tbody class="text-center justify-content-center">

	                     	<?php $counter = 1;
	                     	 while($ambulacia = mysqli_fetch_array($datos2)){
	                     	  $datos =
	                     	  $ambulacia[0]."||".
	                     	  $ambulacia[1]."||".
	                     	  $ambulacia[2]."||".
	                     	  $ambulacia[3];
	                     	  	 ?>
			                     <tr>
			                     		<td> <?php echo $counter; ?> </td>
			                     		<td> <?php echo $ambulacia['modelo'];  ?>   </td>
			                     		<td> <?php echo $ambulacia['placa']; ?>   </td>
			                     		<td> <?php echo $ambulacia['tipo']; ?>   </td>
			                     		<td class="pr-5">
			                  			<button type="button" id="edit" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="editarambu('<?php echo $datos; ?>')"><span class="fas fa-pencil-alt"></span></button>
															<button id="eliminarArt" type="button" class="btn btn-danger delete"><span class="fa fa-trash"></span></button></td>
			                     </tr>
			                     <?php $counter++; } ?>

	                    </tbody>
	                  </table>
									</div>
                </div>
	            </div>

							 <div class="modal" tabindex="-1" role="dialog" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title">Editar Ambulancia</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							       		<form method="POST" action="src/app_api/php/modificar_ambulancia.php">
				                  <div id="form_message"></div>
				                  <div class="form-group mt-4">
				                    <label for="modelo">Modelo de Ambulancia:</label>
				                    <input type="text" class="form-control" name="modeloedit" id="modeloedit">
				                  </div>
				                  <div class="form-group">
				                    <label for="placa">Numero de Placa:</label>
				                    <input type="text" class="form-control" name="placaedit" id="placaedit" >
				                    <div class="invalid-feedback"></div>
				                  </div>
				                  <div class="form-group">
				                    <label for="tipo">Tipo de ambulancia:</label>
				                    <input type="text" class="form-control" name="tipoedit" id="tipoedit">
				                    <div class="invalid-feedback"></div>
				                  </div>
							      </div>
							      <div class="modal-footer">
							        <button type="submit" name="submit" class="btn btn-primary" value="Actualizar"><span id="sub">Guardar Cambios</span></button>
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					            </form>
					  	
							      </div>
							    </div>
							  </div>
							</div>

            </div> <!-- ****************** FIN PANEL DE GESTION DE AMBULANCIA ****************** -->

			      <div class="tab-pane fade" id="usu" role="tabpanel" aria-labelledby="usuario">
					            <h3 class="text-center"><strong>Gestion de Usuario</strong></h3><hr>
					            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
					              <li class="nav-item">
					                <a class="nav-link" id="registro_usuario" data-toggle="tab" href="#regis_usu" role="tab" aria-controls="regis_usu" aria-selected="true">Registro</a>
					              </li>
					              <li class="nav-item">
					                <a class="nav-link" id="mostrar_usuario" data-toggle="tab" href="#most_usu" role="tab" aria-controls="most_usu" aria-selected="false">Listado</a>
					              </li>
					            </ul>
					            <!-- ******************* 1ER TAB ***************** -->
					            <div class="tab-content" id="myTabContent">
					              <div class="tab-pane fade show active" id="regis_usu" role="tabpanel" aria-labelledby="registro_usuario">
					                <div class="col-md-7 offset-md-2 pt-3 mx-auto">
						                <form id="form_create_admin">
															<div id="form_message"></div>
															<div class="form-group">
															 <label>Nombre:</label>
												    		<input type="text" class="form-control" name="fname" id="fname" placeholder="Nombre">
												    		<div class="invalid-feedback">El nombre es invalido</div>
												  		</div>
															<div class="form-group">
															  <label>Apellido:</label>
												    		<input type="text" class="form-control" name="lname" id="lname" placeholder="Apellido">
												    		<div class="invalid-feedback">El apellido es invalido</div>
												  		</div>
															<div class="form-group">
																<label>Correo:</label>
													    	<input type="email" class="form-control" name="email" id="email" placeholder="Correo">
													    	<div class="invalid-feedback">El correo es invalido</div>
													  	</div>
															<div class="form-group">
																<label>Contraseña:</label>
												    		<input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
												    		<div class="invalid-feedback">The PASSWORD is invalid
												        		<ul>
												        			<li>at least 8 characters</li>
												        			<li>must contain at least 1 uppercase letter, 1 lowercase letter, and 1 number</li>
												        			<li>Can contain special characters</li>
												        		</ul>
												      		</div>
												  		</div>
															<div class="form-group">
																<label>Telefono:</label>
												    		<input type="text" class="form-control" name="tlf" id="tlf" placeholder="Telefono">
												    		<div class="invalid-feedback"> The PHONE is invalid </div>
											  			</div>
										  				<div class="form-group col-sm-12">
											    			<label>Tipo de Usuario</label>
											    			<select class="form-control" name="type" id="type ">
																	<option value="Administrador">Administrador/a</option>
											   		    	<option value="Usuario">Usuario/a</option>
																</select>
											   			</div>
											   			<div class="text-center">
																<button type="submit" class="btn btn-primary mt-4 w-25"><span id="sub">Registrar</span></button>
								      				</div>
					      						</form>
					                </div>
					              </div>
											</div>

					            <!-- ******************* 2DO TAB ***************** -->
					            <div class="tab-pane fade show" id="most_usu" role="tabpanel" aria-labelledby="mostrar_usuario"><br>
									 			<table class="table table-striped table-responsive mx-auto">
				                  <thead>
				                    <tr class="text-center justify-content-center">
				                      <th class="pr-5" scope="col">Nombre</th>
				                      <th class="pr-5" scope="col">Apellido</th>
				                      <th class="pr-5" scope="col">Correo</th>
				                      <th class="pr-5" scope="col">Telefono</th>
				                      <th class="pr-5" scope="col">Rango</th>
				                      <th class="pr-5" scope="col">Estado</th>
				                      <th class="pr-5" scope="col">Accion</th>
			                      </tr>
			                    </thead>
			                    <tbody class="text-center justify-content-center">
			                     <?php while($admin = mysqli_fetch_array($datos)){ ?>
			                     	<tr>
			                     		<td><?php echo $admin['fname'] ?></td>
			                     		<td><?php echo $admin['lname'] ?></td>
			                     		<td><?php echo $admin['email'] ?></td>
			                     		<td><?php echo $admin['tlf'] ?></td>
			                     		<td><?php echo $admin['type'] ?></td>
			                     		<td><?php echo $admin['active'] ?></td>


			                     	</tr>
			                     	<?php } ?>
			                    </tbody>
				                </table>
											</div>

				    </div> <!-- ****************** FIN PANEL DE GESTION DE USUARIO ****************** -->

				    <div class="tab-pane fade" id="clien" role="tabpanel" aria-labelledby="cliente" style="background: white;">
					      <h3 class="text-center"><strong>Listado de Usuarios</strong></h3><hr>
							 			<table class="table table-striped table-responsive mx-auto" style="background: white;">
		                  <thead>
		                    <tr class="text-center justify-content-center">
		                      <th class="pr-5" scope="col">Nombre</th>
		                      <th class="pr-5" scope="col">Apellido</th>
		                      <th class="pr-5" scope="col">Correo</th>
		                      <th class="pr-5" scope="col">Telefono</th>
		                      <th class="pr-5" scope="col">Estado</th>
	                      </tr>
	                    </thead>
	                    <tbody class="text-center justify-content-center">
	                     <?php while($client = mysqli_fetch_array($cli)){
	                     	if ($client['active']==1) {
	                     		$client['active'] = "ACTIVO";
	                     	} else {
	                     		$client['active'] = "NO ACTIVO";
	                     	}

	                       ?>
	                     	<tr>
	                     		<td><?php echo $client['fname'] ?></td>
	                     		<td><?php echo $client['lname'] ?></td>
	                     		<td><?php echo $client['email'] ?></td>
	                     		<td><?php echo $client['tlf'] ?></td>
	                     		<td><?php echo $client['active'] ?></td>
	                     	</tr>
	                     	<?php }?>
	                    </tbody>
		                </table>

				    </div> <!-- ****************** FIN PANEL LISTADO DE CLIENTE ****************** -->

	        </div>
	  		</div>
				<div class="col-md-3 col-sm-12 container-noti order-sm-1 order-2 pt-4" style="background: #eee;">
					<h2 class="text-center">Notifications</h2>
					<hr>
					<p class="lead text-center">Se actualizara en <span id="timer"> 00:00 </span></p>
					<hr>
					<div id="notification-panel">

					</div>
				</div>
			</div>
		</div>
	</div>

			<!-- -o-o-o-o-o-o-o-o-o-o- SCRIPT -o-o-o-o-o-o-o-o-o-o- -->

	<script src="./src/assets/js/bigSlide.js"></script>
	<script>
		$(document).ready(function() {
				$('.menu-link').bigSlide();
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="./src/app_api/modules/ambulancias/controller.js"></script>
	<script src="./src/app_api/modules/notificacion/controller.js"></script>
	<script>
		$('#myModal').on('shown.bs.modal', function () {
  			$('#myInput').trigger('focus')
		})

		function editarambu(datos){
			d=datos.split('||');
			$('#idambu').val(d[0]);
			$('#modeloedit').val(d[1]);
			$('#placaedit').val(d[2]);
			$('#tipoedit').val(d[3]);

			
		}
	</script>
</body>
</html>
