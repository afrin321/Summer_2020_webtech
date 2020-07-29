<!DOCTYPE html>
<html>
<head>
	<table>
		<tr>
			<td><img src="logo.png"></td>
			<td size="100%"></td>
			<td align="right">Logged in as 
                <?php 
				$profilename = $_COOKIE['name'];
				echo " $profilename"
				?> | <a href="logout.php">Logout</a>
			</td>
		</tr>
	</table>
		


</head>
<body>
	<table >
		<tr>
			<td>
				<h3>Account</h3>
				<hr />

				<ul>

				<li><a href="loginhome.php"> Dashboard</a></li>
				<li><a href="viewprofile.php"> View Profile</a></li>
				<li><a href="edit_profile.php"> Edit Profile</a></li>
				<li><a href="changeprofilepicture.php"> Change Profile Picture</a></li>
				<li><a href="changepassword.php"> Change Password</a></li>
				<li><a href="logout.php"> Logout</a></li>
			</ul>
							</td>
			<td>
				<h1>
					Welcome 
					<?php 
				$profilename = $_COOKIE['name'];
				echo "$profilename"
				?>
					
				</h1>
			</br>
			</td>
	
</tr>


	</table>


</body>
<footer align="center">Copyright @ 2017</footer>
</html>