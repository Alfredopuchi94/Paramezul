<?php 
	$con = new mysqli('mysql.hostinger.es', 'u420574110_param', '123456', 'u420574110_param');
	$modelo = $_POST['modeloedit'];
	$placa = $_POST['placaedit'];
	$tipo = $_POST['tipoedit'];

	$insert = $con->query("UPDATE ambulancia SET modelo = '$modelo', placa = '$placa', tipo = '$tipo' WHERE placa = '$placa'");
	if ($insert) {
			header("Location:../../../homeadmin.php");

			mysqli_close($con);
		}else{
			echo "error";
		}
 ?>