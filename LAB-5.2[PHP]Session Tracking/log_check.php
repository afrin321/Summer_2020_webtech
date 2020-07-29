<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 		= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['userName']) && isset($_COOKIE['password'])){
				if($username == $_COOKIE['userName'] && $password == $_COOKIE['password']){
					
					setcookie('status', "OK", time()+3600, '/');
					header('location: loginhome.php');

				}else{
					header('location: login.php?msg=invalid_username/password');
				}
			}else{
				echo "don't have any account!";
			}
			
		}	

	}else{
		//echo "invalid request";
		header('location: login.php?msg=submitbuttonerror');
	}




?>