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

<nav class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
  <a class="navbar-brand" href="/">Paramezul</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto"> -->
    	<ul class="navbar-nav mr-auto">
		      <li class=" nav-item active">
		        <a class="nav-link" href="/">Inicio</a>
		      </li>
		    </ul>
		    <?php if (!isset($_SESSION["fname"])) {?>
		    <ul class="navbar-nav">
		      <li class="nav-item dropdown colorLetraMenu">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Iniciar Session
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item colorLetraMenu" href="./adminlogin">Administrador</a>
		          <a class="dropdown-item colorLetraMenu" href="./login">Cliente</a>
		        </div>
		      </li>
		      <li class=" nav-item">
		        <a class="nav-link colorLetraMenu" href="./client">Registrarse</a>
		      </li>
		  </ul>
		  <?php } 
		  	else {
		  	if ($_SESSION["type"] == 'Administrador') {?>

		  	<ul class="navbar-nav">
		      <li class="nav-item dropdown colorLetraMenu">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Hola <?php echo $_SESSION["fname"]; ?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item colorLetraMenu" href="./homeadmin">Panel de administrador</a>
		          <a class="dropdown-item colorLetraMenu" href="./logout">Cerrar Sesión</a>
		        </div>
		      </li>
		  </ul>
		  <?php } else {?> 
		  <ul class="navbar-nav">
		      <li class="nav-item dropdown colorLetraMenu">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Hola <?php echo $_SESSION["fname"]; ?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item colorLetraMenu" href="./servicio">Servicio</a>
		          <a class="dropdown-item colorLetraMenu" href="./logout">Cerrar Sesión</a>
		        </div>
		      </li>
		  </ul>
		  <?php } } ?>
  </div>
</nav>
