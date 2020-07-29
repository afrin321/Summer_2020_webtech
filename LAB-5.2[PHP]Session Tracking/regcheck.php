<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['name']; 
		$email 		= $_POST['email'];
		$userName 	= $_POST['userName'];
		$password 	= $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender 	= $_POST['gender'];
		$day 	= $_POST['day'];
		$month 	= $_POST['month'];
		$yaer 	= $_POST['year'];


		if(empty($name) || empty($email) || empty($userName) || empty($password)){
			echo "null submission found!";
		}else{
			//$_SESSION['uname'] 		= $uname;
			//$_SESSION['password'] 	= $password;
			//$_SESSION['email'] 		= $email;


			setcookie('userName', $userName, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			//setcookie('email', $email, time()+3600, '/');

			header('location: login.html');
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}


	?>