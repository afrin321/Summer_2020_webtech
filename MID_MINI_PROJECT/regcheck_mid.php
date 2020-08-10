<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 		= $_POST['password'];
		$confirmpassword 	= $_POST['confirmpassword'];
		$name 	= $_POST['name'];
		$email 	= $_POST['email'];
		$usertype 	= $_POST['usertype'];
		

		if(empty($id) || empty($password) || empty($confirmpassword) || empty($name) || empty($email) || empty($usertype) ){
			echo "null submission found!";
		}else{
			/*$_SESSION['uname'] 		= $uname;
			$_SESSION['password'] 	= $password;
			$_SESSION['email'] 		= $email;*/

			/*$file = fopen('user.txt', 'a');
			$user = $uname."|".$password."|".$email."/r/n".;
			fwrite($file, $user);
			fclose($file);*/


			$file = fopen('mid.txt', 'a');
			$user = $id."|".$password."|".$confirmpassword."|".$name."|".$email."|".$usertype."\n";
			fwrite($file, $user);
			fclose($file);

			header('location: login.html');
		}	

	}else{
		//echo "invalid request";
		//header('location: login.html');
		echo "some error occured";
	}




?>