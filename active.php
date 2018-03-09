<?php
	session_start();
	session_unset();
	
	require_once "./src/app_api/config/connection.php";
	require_once "./src/app_api/modules/methods/admin.php";

	$id = $_GET["x"];
	$salt = $_GET["y"];

	$obj = new Methods2();
	$resp = $obj->checkAcount('administrador',$id, $salt);

	if ($resp['active'] == '1') {
		header('Location: http://comiczone.hol.es/');
	} else {
	  $obj = new Methods2();
	  $resp = $obj->confirmAcount('administrador',$id, $salt);
	  if ($resp) {
	    header('Location: http://comiczone.hol.es/');
	  } else {
	    echo 'error';
	  }

	}
?>