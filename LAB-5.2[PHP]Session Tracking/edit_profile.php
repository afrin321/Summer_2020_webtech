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
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?php echo $_COOKIE['name']; ?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="<?php echo $_COOKIE['email']; ?>">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio"  value="male">Male
					<input name="gender" type="radio"  value="female">Female
					<input name="gender" type="radio"  value="other">Other
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date of Birth</td>
				<td valign="top">:</td>
				<td>
					<input name="dob" type="text" value="<?php echo $_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year']; ?>">
					<br/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">		
	</form>
</fieldset></td></tr></table>
</body>
<footer align="center">Copyright @ 2017</footer>
</html>