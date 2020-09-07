<?php
	require_once('../service/userService.php');

	if((isset($_POST['ename']))&&(isset($_POST['compname']))&&(isset($_POST['contact']))&&(isset($_POST['username']))&&(isset($_POST['password']))){

		$empname = $_POST['ename']; 
		$compname = $_POST['compname']; 
		$contactno = $_POST['contact']; 
		$username 	= $_POST['username']; 
		$password 	= $_POST['password']; //echo $password;		


		//echo $username;



		if(empty($empname) || empty($compname) || empty($contactno) || empty($username) || empty($password)){
			//header('location: ../views/signup.php?error=null');
			echo "error1";
		}else{
			
			$user = [

				'empname' =>$empname,
				'compname' =>$compname,
				'contno' =>$contactno,
				'username'	=>$username,
				'password'	=>$password,
				
			];

			$status = create($user);
		
			if($status){
				//echo "Success";
				//header('location: ../views/login.php?msg=success');
			}else{
				//header('location: ../views/signup.php?error=dberror');
				//echo "Error2";
			}
		}
		
	}
?>