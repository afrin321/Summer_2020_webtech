<?php
	
	session_start();
	
	if(isset($_POST['submit'])){


		$email 		= $_POST['email'];

		$password 	= $_POST['password'];





		if(empty($email) || empty($password)){
			echo "null submission found!\n";
			
			
		}else{

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement'); 
	        $result = mysqli_query($connection, "SELECT COUNT(useremail) FROM userinfo WHERE useremail='".$email."' AND userpassword='".$password."'");
	        $data1 = mysqli_fetch_assoc($result);
	        //print_r($data1);echo "<br>";
	        if ($data1['COUNT(useremail)'] == 1)
	        {
	        	//echo "connection established";
	        	header('location: userlogin.php'); 

	        }


			header('location: home.php'); 
		}	

	}else{
		//echo "invalid request";
		//header('location: login.php');
	}


	?>