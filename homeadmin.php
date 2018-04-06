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
		$datos = $con->query("SELECT * FROM administrador");
		$datos2 = $con->query("SELECT * FROM ambulancia");
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
	<nav id="menu" class="panel" role="navigation">
		<h4 class="mt-4">Menu Principal</h4>
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">
				<a class="nav-link hvr-underline-from-center"  id="inicio" data-toggle="tab" href="#ini" role="tab" aria-controls="ini" aria-selected="true">
					<span data-feather="home"></span>
					Inicio <span class="sr-only">(current)</span>
				</a>
			</li>
		  <li class="list-group-item">
				<a class="nav-link" id="ambulancia" data-toggle="tab" href="#ambu" role="tab" aria-controls="ambu" aria-selected="false">
					Gestion de Ambulancias
				</a>
			</li>
		</ul>
	</nav>

	<div class="wrap push">
		<nav class="navbar navbar-dark bg-info sticky-top justify-content-between">
		  <button class="menu-link navbar-toggler" type="button" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
			</button>

			<div class="dropdown">
				<button class="btn dropdown-toggle bgtransp text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell"></i></button>
				<div class="dropdown-menu notifications" aria-labelledby="dropdownMenuButton" style="overflow-y: scroll; min-width: 100px; min-height: 100px; max-width: 500px; max-height: 400px;">
					<div class="dropdown-container">
					   <div class="dropdown-toolbar">
				      <div class="dropdown-toolbar-actions">
				        <a href="#"><i class="glyphicon glyphicon-search"></i> View All</a>
				      </div>
				      <h6 class="dropdown-toolbar-title">Recent Notifications  (3)</h6>
				    </div><!-- /dropdown-toolbar -->
					</div>
					<ul class="notifications">
					  <li class="notification">
					      <div class="media">
					        <img src="src/assets/img/photo.png" width="40px" height="40px;" class="mr-2 img-circle" alt="Name">
					        <div class="media-body">
					          <strong class="notification-title font-weight-bold">Alfredo Puchi</strong>
					          <p class="notification-desc"><p class="font-weight-bold">Ubicacion:</p>la rosaleda,<p class="font-weight-bold">Telefono:</p>04126691727,<p class="font-weight-bold">Diagnostico:</p>Cansancio
					          <div class="notification-meta">
					            <small class="timestamp">27. 11. 2015, 15:00</small>
					          </div>
					        </div>
					      </div>
					  </li>
					  <li class="notification">
					      <div class="media">
					        <img src="src/assets/img/photo.png" width="40px" height="40px;" class="mr-2 img-circle" alt="Name">
					        <div class="media-body">
					          <strong class="notification-title"><a href="#">Nikola Tesla</a> resolved <a href="#">T-14 - Awesome stuff</a></strong>
					          <p class="notification-desc">Resolution: Fixed, Work log: 4h</p>
					          <div class="notification-meta">
					            <small class="timestamp">27. 10. 2015, 08:00</small>
					          </div>
					        </div>
					      </div>
					  </li>
					  <li class="notification">
					      <div class="media">
					        <img src="src/assets/img/photo.png" width="40px" height="40px;" class="mr-2 img-circle" alt="Name">
					        <div class="media-body">
					          <strong class="notification-title"><a href="#">James Bond</a> resolved <a href="#">B-007 - Desolve Spectre organization</a></strong>
					          <div class="notification-meta">
					            <small class="timestamp">1. 9. 2015, 08:00</small>
					          </div>
					        </div>
					      </div>
					  </li>
					</ul>
				</div>
			</div>

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
      	<div class="col-md-8 col-sm-12 order-sm-2 order-1 mt-4">
					<h2 class="text-center">PARAMEZUL</h2><hr>
      		<div class="tab-content " id="myTabContent"><!-- PANELES DENTRO DE TAB-CONTEN -->
						<!-- ****************** PANEL DE INICIO ****************** -->
						<div class="tab-pane fade show active" id="ini" role="tabpanel" aria-labelledby="inicio" style="background: white;">
					 		<div class="row">
					 			<div class="col-md-6 col-sm-12 mt-4">
					 				<div class="card border-info text-info">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-ambulance fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  					<div class="huge">10</div>
								  					<div>Ambulancias</div>
								  				</div>
								  			</div>
								  		</div>
								  		<a href="#">
											<div class="card-card-footer text-right pr-2 text-info">
										   <span class="align-content-around">Ver Ambulancias</span>
										   <span class="align-content-between"><i class="fas fa-arrow-circle-right"></i></span>
										   <div class="clearfix"></div>

											</div>
										</a>
									</div>
					 			</div>
					 			<div class="col-md-6 col-sm-12 mt-4">
					 				<div class="card border-danger text-danger">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-user-circle fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  					<div class="huge">3</div>
								  					<div>Administradores</div>
								  				</div>
								  			</div>
								  		</div>
								  		<a href="#">
											<div class="card-card-footer text-right pr-2 text-danger">
										   <span class="align-content-around">Ver Administradores</span>
										   <span class="align-content-between"><i class="fas fa-arrow-circle-right"></i></span>
										   <div class="clearfix"></div>

											</div>
										</a>
									</div>
					 			</div>
					 			<div class="col-md-6 col-sm-12 mt-4">
					 				<div class="card border-warning text-warning">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-users fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  					<div class="huge">87</div>
								  					<div>Clientes</div>
								  				</div>
								  			</div>
								  		</div>
								  		<a href="#">
											<div class="card-card-footer text-right pr-2 text-warning">
										   <span class="align-content-around">Ver Clientes</span>
										   <span class="align-content-between"><i class="fas fa-arrow-circle-right"></i></span>
										   <div class="clearfix"></div>
											</div>
										</a>
									</div>
					 			</div>
					 			<div class="col-md-6 col-sm-12 mt-4">
					 				<div class="card border-success text-success">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-md-3">
								  					<i class="fas fa-cart-plus fa-4x"></i>
								  				</div>
								  				<div class="col-md-9 text-right">
								  					<div class="huge">105</div>
								  					<div>Servicios</div>
								  				</div>
								  			</div>
								  		</div>
								  		<a href="#">
											<div class="card-card-footer text-right pr-2 text-success">
										   <span class="align-content-around">Ver Servicios</span>
										   <span class="align-content-between"><i class="fas fa-arrow-circle-right"></i></span>
										   <div class="clearfix"></div>
											</div>
										</a>
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
			                  			<button type="button" id="edit" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="editarambu('<?php echo $datos ?>')"><span class="fas fa-pencil-alt"></span></button>
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
							       		<form method="POST" action="" id="formeditambu">
				                  <div id="form_message"></div>
				                  <input type="number" hidden="" id="idambu" name="">
				                  <div class="form-group mt-4">
				                    <label for="modelo">Modelo de Ambulancia:</label>
				                    <input type="text" class="form-control" name="" id="modeloedit">
				                  </div>
				                  <div class="form-group">
				                    <label for="placa">Numero de Placa:</label>
				                    <input type="text" class="form-control" name=""  id="placaedit">
				                    <div class="invalid-feedback"></div>
				                  </div>
				                  <div class="form-group">
				                    <label for="tipo">Tipo de ambulancia:</label>
				                    <input type="text" class="form-control" name="" id="tipoedit">
				                    <div class="invalid-feedback"></div>
				                  </div>
							      </div>
							      <div class="modal-footer">
							        <button type="submit" name="submit" class="btn btn-primary" method="post" value="Guardar Cambios"><span id="sub">Guardar Cambios</span></button>
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
	        </div>
	  		</div>
				<div class="col-md-4 col-sm-12 container-noti order-sm-1 order-2 pt-4" style="background: #eee;">
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
