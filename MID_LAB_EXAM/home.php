<?php 
session_start();
$type = $_SESSION['user_type'];
$name = $_SESSION['user_name'];
?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
	<table >
		<tr>
			<td>
				<?php echo ucfirst($type)."'s homepage "; ?>
				
			</td>
			
		</tr>

	</table>
	</fieldset>
	
				<fieldset>
					<h1><?php echo "Welcome ".ucfirst($name);?></h1>
					<table>
						<tr>
							<td><a href="profile.php">Profile</a> </td>
						</tr>
						<tr>
							<td><a href="changepassword.php">Change Password</a> </td>
						</tr>
						<tr>
							<td><a href="viewuser.php">View Users</a> </td>
						</tr>
						<tr>
							<td><a href="">Logout</a> </td>
						</tr>
					</table>


				</fieldset>
			
		
	
</form>


</body>
</html>