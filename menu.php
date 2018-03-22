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
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class=" nav-item colorLetraMenu">
		        <a class="nav-link" href="#">¿Quienes Somos?</a>
		      </li>
		      <li class=" nav-item colorLetraMenu">
		        <a class="nav-link" href="#">Servicios</a>
		      </li>
		      <li class=" nav-item colorLetraMenu">
		        <a class="nav-link" href="#">Nuestro Equipo</a>
		      </li>
		      <li class=" nav-item colorLetraMenu">
		        <a class="nav-link" href="#">Contacto</a>
		      </li>
		    </ul>
		    <?php if (!isset($_SESSION["fname"])) { ?>
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
		  <?php } ?>
		<ul class="navbar-nav">
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
