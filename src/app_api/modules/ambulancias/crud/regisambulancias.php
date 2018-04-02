<?php 
	require_once "./../../../../../vendor/autoload.php";
	require_once "../../../config/connection.php";
	require_once "../../methods/ambulancias.php";

	$res = [];
	$obj = new Methods3();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;
	if(!empty($_POST)){
		$modelo = $_POST["modelo"];
		$placa = $_POST["placa"];
		$tipo = $_POST["tipo"];

		if(isset($modelo) && isset($placa) && isset($tipo)){
			if($modelo!="" && $placa!="" && $tipo!=""){
				
				$obj = new Methods2();
				$resp = $obj->ifExist('administrador', $tipo);
				$res['found'] = $resp;
				if (!$res['found']) {
					$obj = new Methods2();
					$resp = $obj->create($modelo,$placa,$tipo);
					$res['save'] = $resp;
				} else {
					$res['save'] = false;
				}
			}
		}
	}
	echo json_encode($res);