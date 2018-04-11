<?php
	require_once "./src/app_api/modules/methods/common.php";
  session_start();

  $obj = new MethodsC();
  $res = $obj->logout();
  if ($res) {
    session_destroy();
		header("Location: http://comiczone.hol.es");
  } else {
		echo "Error en Log Out";
	}
