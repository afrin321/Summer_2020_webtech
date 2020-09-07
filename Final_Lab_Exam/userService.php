<?php
	
	require_once('../db/db.php');
	
	function getById($id){
		$con = dbConnection();
		$sql = "select * from empinfo where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getAllUser(){
		$con = dbConnection();
		$sql = "select * from empinfo";
		$result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;
	}

	function getByName($name){
		$con = dbConnection();
		$sql = "select * from empinfo where username like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;

	}

		function getByEmpName($name){
		$con = dbConnection();
		$sql = "select * from empinfo where emp_name like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;

	}

		function getByCompName($name){
		$con = dbConnection();
		$sql = "select * from empinfo where comp_name like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;

	}

	function validate ($user){
		$con = dbConnection();
		$sql = "select * from empinfo where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function adminCheck ($user){
		$con = dbConnection();
		$sql = "select * from empinfo where username='{$user['username']}' and password='{$user['password']}' and type='admin'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}

	function create($user){
		$con = dbConnection();
		//$check = "select COUNT(email) from users where email={$user['email']}";

		$sql = "insert into empinfo values( '', '{$user['empname']}' ,'{$user['compname']}' ,'{$user['contno']}', '{$user['username']}', '{$user['password']}', 'employee')";


		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($user){
		$con = dbConnection();
		$sql = "update empinfo set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>