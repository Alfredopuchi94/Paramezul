<?php
	class Methods3{
		//log out
		public function logout(){
			setcookie('fname','', time()-1);
			setcookie('lname','', time()-1);
			setcookie('email','', time()-1);
			setcookie('type','', time()-1);
			if(!empty($_COOKIE['email'])) {
				$res = true;
			} else {
				$res = false;
			}
			return $res;
		}

		// Login getNotification
		public function getNotification(){
      $obj = new connect();
      $connect = $obj->connection();
      $res = 'not found';
      $aux = 'not found';

      $sql= "SELECT * FROM notificacion'";
			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    $res = $row;
			    break;
			  }
			}

      if ($res['status']) {
				$time = strtotime($res['created_at']);
				$res['created_at'] = date("F j, Y, g:i a", $time);

				$sql= "SELECT * FROM notificacion'";
				$result = mysqli_query($connect, $sql);
				if (mysqli_num_rows($result) > 0) {
				  while($row = mysqli_fetch_assoc($result)) {
				    $aux = $row;
				    break;
				  }
				}
				mysqli_close($connect);
				if ($aux['__id']) {
					$res['nombre'] = $aux['fname'].' '. $aux['lname'];
					return $res;
				}
			}
		}

}
