<?php

	require_once "../../../config/connection.php";
	require_once "../../methods/common.php";
	$res = [];
	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;

  $resp = $obj->getNotification();
  if ($resp['status'] ) {
    $res['data'] = $resp;
  } else {
    $res['data'] = false;
  }

	echo json_encode($res);
