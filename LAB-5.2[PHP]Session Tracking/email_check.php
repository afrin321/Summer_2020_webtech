<?php
session_start();
	
	if(isset($_POST['submit'])){

		$email 		= $_POST['email'];
		//$password 	= $_POST['password'];

		if(empty($email)) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['email'])){
									
					
					header('location: home.php');

				}else{
					header('location: login.php?msg=invalid_email');
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