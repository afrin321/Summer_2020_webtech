<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$oldpassword = $_POST['currentpassword'];
		$password = $_POST['newpassword'];
		$confirmpassword = $_POST['retypepassword'];

		if(empty($oldpassword) || empty($password) || empty($confirmpassword) ){
			echo "null submission found!";
		}else{
			if($oldpassword = $_COOKIE['password'])
			{
				setcookie('password', "$password", time()+3600, '/');
				header('location: changepassword.php.php');
			}
			else
			{
				echo "Old password did not match!";
			}

			
			
		}	

	}else{
		echo "invalid request";
		header('location: loginhome.php');
	}




?>