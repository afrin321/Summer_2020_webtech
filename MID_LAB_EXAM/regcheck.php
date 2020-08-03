<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 		= $_POST['password'];
		$confirmpassword 	= $_POST['confirmpassword'];
		$name 	= $_POST['name'];
		$email 	= $_POST['email'];
		$usertype 	= $_POST['password'];
		

		if(empty($uname) || empty($password) || empty($email) ){
			echo "null submission found!";
		}else{
			/*$_SESSION['uname'] 		= $uname;
			$_SESSION['password'] 	= $password;
			$_SESSION['email'] 		= $email;*/

			/*$file = fopen('user.txt', 'a');
			$user = $uname."|".$password."|".$email."/r/n".;
			fwrite($file, $user);
			fclose($file);*/


			$file = fopen('user.txt', 'w');
			$user = $uname."|".$password."|".$email;
			fwrite($file, $user);
			fclose($file);

			header('location: login.php');
		}	

	}else{
		//echo "invalid request";
		header('location: login.html');
	}




?>