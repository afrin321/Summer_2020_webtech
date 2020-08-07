<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['name']; 
		$email 		= $_POST['email'];
		$phoneNo 	= $_POST['phoneNo'];
		$password 	= $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender 	= $_POST['gender'];
		$day 	= $_POST['day'];
		$month 	= $_POST['month'];
		$year 	= $_POST['year'];
		$type 	= $_POST['usertype'];
		$photo 	= $_FILES['userphoto']['tmp_name'];




		if(empty($name) || empty($email) || empty($phoneNo) || empty($password) || empty($confirmPassword) || empty($gender) || empty($day) || empty($month) || empty($year) || empty($type) || empty($photo) ){
			echo "null submission found!\n";
			if ($password != $confirmPassword )
			{
				echo "passwords did not match!\n";
			}
			if (!is_numeric($phoneNo))
			{
				echo "invalid phone number!\n";
			}
			if (!ctype_alpha($name))
			{
				echo "name cannot contain numbers or other charecters!\n";
			}
			if ((!strpos($email, '@')) || ((!strpos($email, '.'))))
			{
				echo "not a valid email address!\n";
			}
			if ((!is_numeric($day))||(!is_numeric($month))||(!is_numeric($year)))
			{
				echo "DOB has to be numeric!\n";

				if (($day>31) || ($day<1)) 
			{
				echo "day is invalid\n";
			}
			if (($month>12) || ($month<1)) 
			{
				echo "invalid month field\n";
			}
			if (($year<1940) || ($year>2018))
			{
				echo "invalid year\n";
			}
			}
			
		}else{

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement'); 
	        $result = mysqli_query($connection, "INSERT INTO userinfo (username, useremail, userphoneno, userpassword, userconfirmpassword, usergender, dob_day, dob_month, dob_year, userphoto, usertype) VALUES ('".$name."', '".$email."', '".$phoneNo."', '".$password."', '".$confirmPassword."', '".$gender."', '".$day."', '".$month."', '".$year."', '".$photo."', '".$type."')");

			echo "successful connection!";



			header('location: home.php');
		}	

	}else{
		//echo "invalid request";
		//header('location: login.php');
	}


	?>