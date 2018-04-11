<?php
	require_once "../../../config/connection.php";
	require_once "../../methods/notificacion.php";
	$res = [];
	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;
	if(!empty($_POST)){
		$id = $_POST["id"];
		$status = $_POST["newStatus"];

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
