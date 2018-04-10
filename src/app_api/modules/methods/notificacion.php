<?php
	class Methods{
	  public function tryToConnect(){ 
      $obj = new connect(); 
      $connect = $obj->connection(); 
      $res = false; 
      if (mysqli_ping($connect)) { $res = true; } 
      mysqli_close($connect); 
       
      return $res; 
    }
		
		// Login getNotification
		public function getNotification(){
      $obj = new connect();
      $connect = $obj->connection();
      $res = [];
      $aux = [];

      $sql= "SELECT * FROM notificacion";
			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
					$time = strtotime($row['created_at']);
					$row['created_at'] = date("F j, Y, g:i a", $time);

					$email_aux = $row['email_cliente'];

					$sql2= "SELECT fname, lname FROM cliente WHERE email = '$email_aux'";
					$result2 = mysqli_query($connect, $sql2);
					if (mysqli_num_rows($result2) > 0) {
					  while($aux = mysqli_fetch_assoc($result2)) {
					  	$row['nombre'] = $aux['fname'].' '. $aux['lname'];
					    break;
					  }
					}
					array_push($res, $row);
			  }
			}

      if ($res) {
				// mysqli_close($connect);
				// if ($aux) {
				// 	// $res['nombre'] = $aux['fname'].' '. $aux['lname'];
					return $res;
				// }
			} else {
				return $res = 'not found';
			}
		}

}
