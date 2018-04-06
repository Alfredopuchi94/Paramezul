<?php
	require_once "./../../../../../vendor/autoload.php";
	require_once "../../../config/connection.php";
	require_once "../../methods/cliente.php";
	require_once "../../methods/common.php";
	require_once "../../methods/mail/mail.php";
	$res = [];
	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;
	if(!empty($_POST)){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pass  = $_POST["pass"];
		$tlf   = $_POST["tlf"];
		if(isset($fname) && isset($lname) && isset($email) && isset($pass) && isset($tlf)){
			if($fname!="" && $lname!="" && $email!="" && $pass!="" && $tlf!=""){
				
				$obj = new Methods();
				$resp = $obj->ifExist('cliente', $email);
				$res['found'] = $resp;
				if (!$res['found']) {
					$obj = new Methods();
					$resp = $obj->create($fname,$lname,$email,$pass,$tlf);
					$res['save'] = $resp;
				} else {
					$res['save'] = false;
				}
			}
		}
	}
	echo json_encode($res);
