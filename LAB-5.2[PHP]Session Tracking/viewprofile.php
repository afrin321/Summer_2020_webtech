<!DOCTYPE html>
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
				echo " $profilename "
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
				<fieldset>
					<legend><b>PROFILE</b></legend>

					<table>
						<tr>
							<td>
								Name:     <?php echo $_COOKIE['name']; ?> </br>
								<hr />
							</td>
							<td rowspan="4"><img src="115995371_758181218291252_7094477990132746244_n.jpg"></td>
						</tr>
						<tr>
							<td>
								Email:    <?php echo $_COOKIE['email']; ?> </br>
								<hr />
							</td>
							
						</tr>
						<tr>
							<td>
								Gender:    <?php echo $_COOKIE['gender']; ?>	</br>
								<hr />
							</td>
							
						</tr>
						<tr>
							<td>
								Date of birth: <?php echo $_COOKIE['day'] ."/". $_COOKIE['month'] ."/" .$_COOKIE['year'] ; ?>    </br>
								<hr />
							</td>
							
						</tr>
						<tr>
							<td><a href="edit_profile.php">Edit Profile</a>               </td>
							<td><a href="">Change</a></td>
						</tr>
					</table>

				</fieldset>


			
			</td>
	
</tr>


	</table>


</body>
<footer align="center">Copyright @ 2017</footer>
</html>