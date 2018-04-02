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

		public function regis($modelo,$placa,$tipo){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;
			date_default_timezone_set('America/La_Paz');
			$id = uniqid();
			$date = date("Y-m-d H:i:s", time());
			$sql = "INSERT INTO ambulancias (id, modelo, placa, tipo, created_at, update_at) VALUES ('$id', '$modelo', '$placa', '$tipo', '$date', '$date')";
			if (mysqli_query($connect, $sql)) {
				 $res = true;
			}
			mysqli_close($connect);
			
			return $res;
		}

}




















