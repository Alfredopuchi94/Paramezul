<?php

	require_once "../../../config/connection.php";
	require_once "../../methods/notificacion.php";
	$res = [];
	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;

	$obj = new Methods();
  $resp = $obj->getNotification();
  // if ($resp['status'] ) {
    $res['data'] = $resp;
  // } else {
    // $res['data'] = false;
  // }

	echo json_encode($res);
