<?php
	require_once "../../../config/connection.php";
	require_once "../../methods/cliente.php";
	require_once "../../methods/notificacion.php";
	$res = [];
	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;
	if(!empty($_POST)){
		$id = $_POST["email"];
		$status = $_POST["pass"];
		if(isset($id) && isset($status)){
			if($id!="" && $status!=""){
				$obj = new Methods();
				$response = $obj->status($id, $status);
				if ($response){
					$res['status'] = 'status';
				} else{
					$res['status'] = 'no status';
				}
			}
		}
	}
	echo json_encode($res);
