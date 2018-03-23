<?php
	require_once "./../../../../../vendor/autoload.php";
	require_once "../../../config/connection.php";
	require_once "../../methods/admin.php";
	require_once "../../methods/common.php";
	require_once "../../methods/mail/mail.php";
	$res = [];
	$obj = new Methods2();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;
	if(!empty($_POST)){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pass  = $_POST["pass"];
		$tlf   = $_POST["tlf"];
		$type  = $_POST["type"];
		if(isset($fname) && isset($lname) && isset($email) && isset($pass) && isset($tlf) && isset($type)){
			if($fname!="" && $lname!="" && $email!="" && $pass!="" && $tlf!="" && $type!=""){
				
				$obj = new Methods2();
				$resp = $obj->ifExist('administrador', $email);
				$res['found'] = $resp;
				if (!$res['found']) {
					$obj = new Methods2();
					$resp = $obj->create($fname,$lname,$email,$pass,$tlf,$type);
					$res['save'] = $resp;
				} else {
					$res['save'] = false;
				}
			}
		}
	}
	echo json_encode($res);
