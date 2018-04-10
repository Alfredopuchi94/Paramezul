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
			    // $res = $row;
			    // break;
					array_push($res, $row);
			  }
			}

      if ($res['status']) {
				$time = strtotime($res['created_at']);
				$res['created_at'] = date("F j, Y, g:i a", $time);

				$sql= "SELECT * FROM es_notificado'";
				$result = mysqli_query($connect, $sql);
				if (mysqli_num_rows($result) > 0) {
				  while($row = mysqli_fetch_assoc($result)) {
				    // $aux = $row;
				    // break;
				    array_push($aux, $row);
				  }
				}
				mysqli_close($connect);
				if ($aux) {
					// $res['nombre'] = $aux['fname'].' '. $aux['lname'];
					return $res;
				}
			}
		}

}
