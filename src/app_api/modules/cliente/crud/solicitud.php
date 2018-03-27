<?php
	require_once "../../../config/connection.php";
	require_once "../../methods/cliente.php";
	require_once "../../methods/common.php";

	$res = [];

	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;

	if(!empty($_POST)){

		$id = $_POST["id_cliente"];
		$telf = $_POST["telf_contacto"];
		$ubicacion = $_POST["ubicacion"];
		$tipo = $_POST["tipo"];

		if(isset($id) && isset($telf) && isset($ubicacion) && isset($tipo)){

			if($id!="" && $telf!="" && $ubicacion!="" && $tipo!=""){

				$obj = new Methods();
				$resp = $obj->notificar( $id, $telf, $ubicacion, $tipo );

				if ($resp){
					$res['sent'] = true;
				} else{
					$res['sent'] = false;
				}
			}
		}
	}

	echo json_encode($res);
