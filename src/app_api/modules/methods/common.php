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
      $sql= "SELECT * FROM notificacion'";
			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    $res = $row;
			    break;
			  }
			}
			mysqli_close($connect);
      if ($res['status']) {
				// $datetime is something like: 2014-01-31 13:05:59
				$time = strtotime($res['created_at']);
				$res['created_at'] = date("F j, Y, g:i a", $time);
				// $myFormatForView is something like: January 21, 2014, 01:05 pm
        return $res;
      }
		}
}
