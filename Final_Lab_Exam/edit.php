<?php
	
	require_once('../php/sessionController.php');	
	require_once('../service/userService.php');	


	$user = getById($_GET['id']);

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Empname</td>
					<td><input type="text" name="username" value="<?=$user['empname']?>"></td>
				</tr>
				<tr>
					<td>CompName</td>
					<td><input type="text" name="username" value="<?=$user['compname']?>"></td>
				</tr>
				<tr>
					<td>ContactNo</td>
					<td><input type="text" name="username" value="<?=$user['contno']?>"></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?=$user['username']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$user['password']?>"></td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="update" value="update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>