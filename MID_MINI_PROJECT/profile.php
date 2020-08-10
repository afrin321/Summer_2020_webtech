<?php

session_start();


?>



<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan="2">
				Profile
				
			</td>
			<td>
				
			</td>
		</tr>
		<tr>
			<td>
				ID
			</td>
			<td>
				<?php echo " ".$_SESSION['uid']; ?>
				
			</td>
		</tr>
		<tr>
			<td>
				NAME
			</td>
			<td>
				<?php echo " ".$_SESSION['user_name']; ?>
			</td>
		</tr>
		<tr>
			<td>
				EMAIL
			</td>
			<td>
				<?php echo " ".$_SESSION['em']; ?>
			</td>
		</tr>
		<tr>
			<td>
				USER TYPE
			</td>
			<td>
				<?php echo " ".$_SESSION['user_type']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="home.php">Go home</a>				
			</td>
			<td>
				
			</td>
		</tr>
	</table>

</body>
</html>