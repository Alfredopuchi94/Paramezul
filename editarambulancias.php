<?php 

	 // require_once "./../../../../../vendor/autoload.php";
	 // require_once "../../../config/connection.php";
	// require_once "../../methods/ambulancias.php";
$con = new mysqli('mysql.hostinger.es', 'u420574110_param', '123456', 'u420574110_param');
	if (isset($_GET['editar'])) {
		$editar_id = $_GET['editar'];

		$consulta = "SELECT * FROM ambulancia WHERE id='$editar_id'";
		$ejecutar = mysqli_query($con, $consulta);

		$fila = mysqli_fetch_array($ejecutar);

		$modelo = $fila['modelo']; 
		$placa = $fila['placa']; 
		$tipo = $fila['tipo']; 
	}

?>

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
								       		<form method="POST" action="">
					                  <div id="form_message"></div>
					                  <div class="form-group mt-4">
					                    <label for="modelo">Modelo de Ambulancia:</label>
					                    <input type="text" class="form-control"  id="modelo" value="<?php echo $modelo; ?>">
					                  </div>
					                  <div class="form-group">
					                    <label for="placa">Numero de Placa:</label>
					                    <input type="text" class="form-control"  id="placa"  value="<?php echo $placa; ?>" >
					                    <div class="invalid-feedback"></div>
					                  </div>
					                  <div class="form-group">
					                    <label for="tipo">Tipo de ambulancia:</label>
					                    <input type="text" class="form-control" id="tipo"  value="<?php echo $tipo; ?>">
					                    <div class="invalid-feedback"></div>
					                  </div>
						            </form>
								      </div>
								      <div class="modal-footer">
								        <button type="submit" name="submit" class="btn btn-primary" method="post" value="Guardar Cambios"><span id="sub">Guardar Cambios</span></button>
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								      </div>
								    </div>
								  </div>
								</div>

















	// $res = [];
	// $obj = new Methods3();
	// $resp = $obj->tryToConnect();
	// $res['connection'] = $resp;
	// if(!empty($_POST)){
	// 	$modelo = $_POST["modelo"];
	// 	$placa = $_POST["placa"];
	// 	$tipo = $_POST["tipo"];

	// 	if(isset($modelo) && isset($placa) && isset($tipo)){
	// 		if($modelo!="" && $placa!="" && $tipo!=""){
				
	// 			$obj = new Methods3();
	// 			$resp = $obj->ifExist('ambulancia', $placa);
	// 			$res['found'] = $resp;
	// 			if (!$res['found']) {
	// 				$obj = new Methods3();
	// 				$resp = $obj->update($modelo,$placa,$tipo);
	// 				$res['save'] = $resp;
	// 			} else {
	// 				$res['save'] = false;
	// 			}
	// 		}
	// 	}
	// }
	// echo json_encode($res);