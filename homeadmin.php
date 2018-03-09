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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | Administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="./src/assets/css/app.css">
	<!-- <script src="https://use.fontawesome.com/54fbcaa374.js"></script> -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="./src/assets/css/sidebar-style.css">
	
</head>
<body>
	<nav class="navbar navbar-dark bg-info sticky-top justify-content-between mt-0">
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	    <!-- <ul class="navbar-nav mr-auto"> -->
  		<div class="dropdown show mr-4">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?>
  </a>
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
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          	<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav flex-column align-items-center" id="myTab" role="tablist">
              <li class="nav-item menuhover active">
                <a class="nav-link "  id="inicio" data-toggle="tab" href="#ini" role="tab" aria-controls="ini" aria-selected="true">
                  <span data-feather="home"></span>
                  Inicio <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item menuhover">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Notificaciones
                </a>
              </li>
              <li class="nav-item menuhover">
                <a class="nav-link" id="ambulancia" data-toggle="tab" href="#ambu" role="tab" aria-controls="ambu" aria-selected="false">
                  <span data-feather="shopping-cart"></span>
                  Gestion de ambulancias
                </a>
              </li>
               <li class="nav-item menuhover">
                <a class="nav-link" id="usuario" data-toggle="tab" href="#usu" role="tab" aria-controls="usu" aria-selected="false">
                  <span data-feather="shopping-cart"></span>
                  Gestion de usuarios
                </a>
              </li>
              <li class="nav-item menuhover">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Clientes
                </a>
              </li>
              <li class="nav-item menuhover">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reportes
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading px-3 mt-4 mb-1 text-muted align-content-center pl-5">
              <span class="mx-auto">Reportes guardados</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2 align-items-center">
              <li class="nav-item menuhover2">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Mes actual
                </a>
              </li>
              <li class="nav-item menuhover2">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Mensual
                </a>
              </li>
              <li class="nav-item menuhover2">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Anual
                </a>
              </li>
            </ul>
          </div>
      </div>
        </nav>
      
	<div class="container">
		<div class="row mt-4">
        		
        		
        		<div class="col-md-12 offset-md-1 pl-5">	
        		<div class="tab-content" id="myTabContent"><!-- PANELES DENTRO DE TAB-CONTEN -->
				<!-- ****************** PANEL DE INICIO ****************** -->
					<div class="tab-pane fade show active" id="ini" role="tabpanel" aria-labelledby="inicio">
				 		<h3 class="text-center"><strong>PARAMEZUL</strong></h3><hr>
				 		<div class="row">
				 			<div class="col-lg-3 col-md-6 col-sm-12">
				 				<div class="card border-info text-info">
							  		<div class="card-header">
							  			<div class="row">
							  				<div class="col-md-3">
							  					<i class="fas fa-ambulance fa-5x"></i>
							  				</div>
							  				<div class="col-md-9 text-right">
							  					<div class="h3">10</div>
							  					<div class="h6">Ambulancias</div>
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
				 			<div class="col-lg-3 col-md-6 col-sm-12">
				 				<div class="card border-danger text-danger">
							  		<div class="card-header">
							  			<div class="row">
							  				<div class="col-md-3">
							  					<i class="fas fa-user-circle fa-5x"></i>
							  				</div>
							  				<div class="col-md-9 text-right">
							  					<div class="h3">3</div>
							  					<div class="h6">Administradores</div>
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
				 			<div class="col-lg-3 col-md-6 col-sm-12">
				 				<div class="card border-warning text-warning">
							  		<div class="card-header">
							  			<div class="row">
							  				<div class="col-md-3">
							  					<i class="fas fa-users fa-5x"></i>
							  				</div>
							  				<div class="col-md-9 text-right">
							  					<div class="h3">87</div>
							  					<div class="h6">Clientes</div>
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
				 			</div><div class="col-lg-3 col-md-6 col-sm-12">
				 				<div class="card border-success text-success">
							  		<div class="card-header">
							  			<div class="row">
							  				<div class="col-md-3">
							  					<i class="fas fa-cart-plus fa-5x"></i>
							  				</div>
							  				<div class="col-md-9 text-right">
							  					<div class="h3">105</div>
							  					<div class="h6">Servicios</div>
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
					</div>
					<!-- ****************** FIN PANEL DE INICIO ****************** -->
				
           			<!-- ****************** PANEL DE GESTION DE AMBULANCIA ****************** -->
	        			<div class="tab-pane fade" id="ambu" role="tabpanel" aria-labelledby="ambulancia">
	            <h3 class="text-center"><strong>Gestion de Ambulancia</strong></h3><hr>
	            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
	              <li class="nav-item">
	                <a class="nav-link" id="registro" data-toggle="tab" href="#regis" role="tab" aria-controls="regis" aria-selected="active">Registro</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" id="mostrar" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Listado</a>
	              </li>
	            </ul>
	            <!-- ******************* 1ER TAB ***************** -->
	            <div class="tab-content" id="myTabContent">
	              <div class="tab-pane fade show active" id="regis" role="tabpanel" aria-labelledby="registro">
	              	<div class="col-md-7 offset-md-2 pt-3 mx-auto">
		                <form id="form_ambulancias" name="form_ambulancias" method="post" action="">
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
	                  <!-- ******************* FIN 1ER TAB ***************** -->
	                  <!-- ******************* 2DO TAB ***************** -->
	                
	              	<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="mostrar"><br>
		                <table class="table table-striped table-responsive mx-auto">
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
		                      <tr>
		                        <th class="pr-5" scope="row">1</th>
		                        <td class="pr-5">chevrolet</td>
		                        <td class="pr-5">AJ12PT2</td>
		                        <td class="pr-5">Camioneta</td>
		                        <td class="pr-5"><button type="button" id="edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span></button>
		                        <button id="eliminarArt" type="button" class="btn btn-danger delete"><span class="fa fa-trash"></span></button></td>
		                      </tr>
		                      <tr>
		                        <th class="pr-5" scope="row">2</th>
		                        <td class="pr-5">Toyota</td>
		                        <td class="pr-5">MC32J45</td>
		                        <td class="pr-5">Camioneta</td>
		                        <td class="pr-5"><button type="button" id="edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span></button>
		                        <button id="eliminarArt" type="button" class="btn btn-danger delete"><span class="fa fa-trash"></span></button></td>
		                      </tr>
		                      <tr>
		                        <th class="pr-5" scope="row">3</th>
		                        <td class="pr-5">Ford</td>
		                        <td class="pr-5">SA223CR</td>
		                        <td class="pr-5">Micro</td>
		                        <td class="pr-5"><button type="button" id="edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span></button>
		                        <button id="eliminarArt" type="button" class="btn btn-danger delete"><span class="fa fa-trash"></span></button></td>
		                      </tr>
		                       
		                    </tbody>
		                  </table>
	                </div> <!-- ******************* FIN 2DO TAB ***************** -->
	                
	              </div>
	            </div> <!-- ****************** FIN PANEL DE GESTION DE AMBULANCIA ****************** -->
	              
	             <!-- ****************** PANEL DE GESTION DE USUARIO ****************** -->
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
				                  <!-- ******************* FIN 1ER TAB ***************** -->
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
				                     <?php while($client = mysqli_fetch_array($datos)){ ?>
				                     	<tr>
				                     		<td><?php echo $client['fname'] ?></td>
				                     		<td><?php echo $client['lname'] ?></td>
				                     		<td><?php echo $client['email'] ?></td>
				                     		<td><?php echo $client['tlf'] ?></td>
				                     		<td><?php echo $client['type'] ?></td>
				                     		<td><?php echo $client['active'] ?></td>
				                     		
				                     		
				                     	</tr>
				                     	<?php } ?>
				                    </tbody>
				                  </table>
				                
				              </div> <!-- ******************* FIN 2DO TAB ***************** -->
				                
				            </div>
			        	</div> <!-- ****************** FIN PANEL DE GESTION DE USUARIO ****************** -->
         
         		</div> <!-- FIN PANELES DENTRO DE TAB-CONTEN -->
  			</div>
		</div>
	</div>
	
	
			<!-- -o-o-o-o-o-o-o-o-o-o- SCRIPT -o-o-o-o-o-o-o-o-o-o- -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="./src/app_api/modules/admin/controller.js"></script>
	<script>
		$('#myModal').on('shown.bs.modal', function () {
  			$('#myInput').trigger('focus')
		})
	</script>
</body>
</html>