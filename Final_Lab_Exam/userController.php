<?php
	require_once('../service/userService.php');

	//create new user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/create.php?error=null');
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email
			];
			$status = create($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/create.php?error=dberror');
			}
		}	
	}

	//edit new user
	if(isset($_POST['update'])){
		$ename = $_POST['empname'];
		$cname = $_POST['compname'];
		$contact = $_POST['contno'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$id = $_POST['id'];
		

		if(empty($username) || empty($password) || empty($ename) || empty($cname) || empty($contact)){
			header('location: ../views/edit.php?id='.$id);
		}else{
			$user = [

				'empname' =>$ename,
				'compname' =>$cname,
				'contno' =>$contact,
				'username'	=>$username,
				'password'	=>$password,
				

			];

			$status = update($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/edit.php?id='.$id);
			}
		}	
	}

		if(isset($_POST['addjob'])){
		$compname 	= $_POST['cname'];
		$title 	= $_POST['title'];
		$location 		= $_POST['location'];
		$salary 		= $_POST['salary'];
		if(empty($cname) || empty($title) || empty($location) || empty($salary)){
			header('location: ../views/create.php?error=null');
		}else{
			$user = [
				'cname'	=>$compname,
				'title'	=>$title,
				'location'		=>$location,
				'salary' => $salary,
			];
			$status = create($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/create.php?error=dberror');
			}
		}	
	}


?>