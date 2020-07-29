<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['name'];
		$email 	= $_POST['email'];
		$gender 	= $_POST['gender'];
		$dob 	= $_POST['dob'];

		if(empty($name) || empty($email) || empty($gender) || empty($dob)){
			echo "null submission found!";
		}else{
			
			setcookie('name', "$name", time()+3600, '/');
			
			setcookie('email', "$email", time()+3600, '/');
			
			setcookie('gender', "$gender", time()+3600, '/');

			setcookie('dob', "$dob", time()+3600, '/');

			echo submitted successfully;


			

			
			}
			
		}	

	}else{
		//echo "invalid request";
		header('location: edit_profile.php?msg=submitbuttonerror');
	}




?>