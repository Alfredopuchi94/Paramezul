<?php  
	class Methods3{ 
	  public function tryToConnect(){ 
	      $obj = new connect(); 
	      $connect = $obj->connection(); 
	      $res = false; 
	      if (mysqli_ping($connect)) { $res = true; } 
	      mysqli_close($connect); 
	       
	      return $res; 
	    }

    // If exist the User 
		public function ifExist($table, $placa){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;
			$sql= "SELECT placa FROM $table WHERE placa ='$placa'";
			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {
			       $res = true; 
			       break;
			    }
			}
			mysqli_close($connect);
			return $res;
		} 
 
    public function create($modelo,$placa,$tipo){ 
      $obj = new connect(); 
      $connect = $obj->connection(); 
      $res = false; 
      date_default_timezone_set('America/La_Paz'); 
      $id = md5(uniqid());
      $date = date("Y-m-d H:i:s", time()); 
      $sql = "INSERT INTO ambulancia (id, modelo, placa, tipo, created_at, update_at) VALUES ('$id', '$modelo', '$placa', '$tipo', '$date', '$date')"; 
      if (mysqli_query($connect, $sql)) { 
         $res = true; 
      } 
      mysqli_close($connect); 
       
      return $res; 
    } 
 
} 






















