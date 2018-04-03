<?php 
	require_once('../config/connection.php');
	if( $_REQUEST['id'] == "formservicio"){
	
	$nombre_cliente = $_REQUEST['nombre_cliente'];
	$nombre_pasiente = $_REQUEST['nombre_pasiente'];
	$diagnostico = $_REQUEST['diagnostico'];
	$ubi_salida = $_REQUEST['ubi_salida'];
	$ubi_destino = $_REQUEST['ubi_destino'];
	$telefono = $_REQUEST['telefono'];
	$type = $_REQUEST['type'];
	date_default_timezone_set('America/La_Paz');
	$servicio_at = date("Y-m-d H:i:s", time());
	
	// $validar = mysqli_query($connect, "SELECT nombrePersona FROM registronuevo");
	$insertar = mysqli_query($connect, "INSERT INTO servicios (nombre_cliente, nombre_pasiente, diagnostico, ubi_salida, ubi_destino, telefono,type, servicio_at) VALUES ('$nombre_cliente', '$nombre_pasiente', '$diagnostico', '$ubi_salida', '$ubi_destino', '$telefono', '$type', '$servicio_at')");
		
		if ($insertar) {
		    echo "servicio solicitado... ";
			mysqli_close($connect);
		}else{
			echo "error";
		}
}
 ?>