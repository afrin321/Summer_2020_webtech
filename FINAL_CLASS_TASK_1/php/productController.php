<?php
	require_once('../service/productService.php');

	//create new user
	if(isset($_POST['createproduct'])){
		$name 	= $_POST['name'];
		$description 	= $_POST['description'];
		$quantity = $_POST['quantity'];
		$date	= $_POST['date'];
		$price		= $_POST['price'];
		$status	= $_POST['status'];
		//$product_img	= $_FILES['img']['tmp_name'];
		
		$target_dir = "../views/image/";
		move_uploaded_file($product_img, $target_dir);
		if(empty($name) || empty($description) || empty($quantity) || empty($date) || empty($price) || empty($status)  ){
			//header('location: ../views/home.php?error=null');
			echo $name; 
			echo $description;
			echo $quantity;
			echo $date;
			echo $price;
			echo $status;
			//echo $product_img; 

		}else{
			$pr = [
				'name'	=> $name,
				'description'	=> $description,
				'quantity'		=> $quantity,
				'date'		=> $date,
				'price'		=> $price,
				'status'		=> $status,
				//'product_img'		=> $target_dir
			];
			$status = createproduct($pr);
			if($status){
				header('location: ../views/createproduct.php?msg=success');
			}else{
				header('location: ../views/home.php?error=dberror');
			} 
		}	
	}

	//edit new user
	if(isset($_POST['update'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id='.$id);
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email,
				'id'		=>$id

			];

			$status = update($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/edit.php?id='.$id);
			}
		}	
	}

		if(isset($_POST['delete'])){
		

$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/delete.php?id='.$id);
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email,
				'id'		=>$id

			];

			$status = delete($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/delete.php?id='.$id);
			}
		}	
		}	
	
?>