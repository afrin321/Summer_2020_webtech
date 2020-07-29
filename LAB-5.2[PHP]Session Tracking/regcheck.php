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
		$year 	= $_POST['year'];


		if(empty($name) || empty($email) || empty($userName) || empty($password) || empty($gender) || empty($day) || empty($month) || empty($year)){
			echo "null submission found!";
		}else{
			//$_SESSION['uname'] 		= $uname;
			//$_SESSION['password'] 	= $password;
			//$_SESSION['email'] 		= $email;

			setcookie('name', $name, time()+3600, '/');
			setcookie('userName', $userName, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('confirmPassword', $confirmPassword, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');

			header('location: login.php');
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}


	?>