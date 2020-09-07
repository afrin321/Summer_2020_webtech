<?php
	
	require_once('../php/sessionController.php');	

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New Job</legend>
			<table>
				<tr>
					<td>Company name</td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td>Job title</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td>Job location</td>
					<td><input type="text" name="location"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="addjob" value="Create">
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>