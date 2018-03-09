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



		//try to connect
		// public function tryToConnect(){
		// 	$obj = new connect();
		// 	$connect = $obj->connection();
		// 	$res = false;

		// 	if (mysqli_ping($connect)) { $res = true; }
		// 	mysqli_close($connect);
			
		// 	return $res;
		// }


		// // If exist the User 
		// public function ifExist($table, $email){
		// 	$obj = new connect();
		// 	$connect = $obj->connection();
		// 	$res = false;

		// 	$email_lower = strtolower($email);
		// 	$email_s = filter_var($email_lower, FILTER_SANITIZE_EMAIL);

		// 	$sql= "SELECT email FROM $table WHERE email='$email_s'";
		// 	$result = mysqli_query($connect, $sql);

		// 	if (mysqli_num_rows($result) > 0) {
		// 	    while($row = mysqli_fetch_assoc($result)) {
		// 	       $res = true; 
		// 	       break;
		// 	    }
		// 	}

		// 	mysqli_close($connect);

		// 	return $res;
		// }


	// 	public function login($table, $email, $pass){
	//       $obj = new connect();
	//       $connect = $obj->connection();
	//       $res = 'not found';
	//       $email_lower = strtolower($email);
	// 	  $email_s = filter_var($email_lower, FILTER_SANITIZE_EMAIL);

	//       $sql= "SELECT * FROM $table WHERE email='$email_s'";
	// 			$result = mysqli_query($connect, $sql);

	// 			if (mysqli_num_rows($result) > 0) {
	// 			  while($row = mysqli_fetch_assoc($result)) {
	// 			    $res = $row;
	// 			    break;
	// 			  }
	// 			}
	// 			mysqli_close($connect);

	//       if ($res) {
	//         if ( password_verify($pass, $res['hash']) ) {
	//           return $row;
	//         }
	//       } else {
	//         return $res;
	//       }
	//     } 
}

 