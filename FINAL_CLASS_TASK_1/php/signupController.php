<?php
	require_once('../service/userService.php');

	if((isset($_POST['username']))&&(isset($_POST['password']))&&(isset($_POST['email']))){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		//echo $username;



		if(empty($username) || empty($password) || empty($email)){
			//header('location: ../views/signup.php?error=null');
			echo "error1";
		}else{
			
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email
			];

			$status = create($user);
		
			if($status){
				echo "Success";
				//header('location: ../views/login.php?msg=success');
			}else{
				//header('location: ../views/signup.php?error=dberror');
				echo "Error2";
			}
		}
		
	}
?>