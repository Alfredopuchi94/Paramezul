<?php
	require_once "../../../config/connection.php";
	require_once "../../methods/cliente.php";
	require_once "../../methods/common.php";

	$res = [];

	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;

	if(!empty($_POST)){

		$email = $_POST["email"];
		$telf = $_POST["telf_contacto"];
		$ubicacion = $_POST["ubicacion"];
		$tipo = $_POST["tipo"];

		if(isset($email) && isset($telf) && isset($ubicacion) && isset($tipo)){

			if($email!="" && $telf!="" && $ubicacion!="" && $tipo!=""){
				$res['validacion'] = true;

				$obj = new Methods();
				$resp = $obj->notificar( $email, $telf, $ubicacion, $tipo );
				$res['resp'] = $resp;

				if ($resp){
					$res['sent'] = true;
				} else{
					$res['sent'] = false;
				}
			}
		}
	}

	echo json_encode($res);
