<?php 
	require_once "../../../config/connection.php";
	require_once "../../methods/admin.php";
	require_once "../../methods/common.php";
	$res = [];
	$obj = new Methods2();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;
	if(!empty($_POST)){
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		if(isset($email) && isset($pass)){
			if($email!="" && $pass!=""){
				$obj = new Methods2();
				$user = $obj->login('administrador',$email,$pass);
				if ($user['active'] == '1'){
					$res['data'] = $user;
					$res['active'] = true;
				} else{
					$res['active'] = false;
				}
			}
		}
	} 
	echo json_encode($res);
