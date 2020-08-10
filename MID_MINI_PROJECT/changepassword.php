<?php 
session_start();






?>
<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>
</head>
<body>
	<form name="cpw" method="post" action="changepassword.php">
		<fieldset form="cpw">
			<legend>CHANGE PASSWORD</legend>
		</fieldset>
	Change Password </br>
	<input type="text" name="password"> </br>
    New Password </br>
    <input type="text" name="newpassword"> </br>
    Retype New Password </br>
    <input type="text" name="retype"></br>
    <hr/>
    <input type="submit" name="submit" value="Change">
    <a href="home.php">Home</a>



	</form>

</body>
</html>

<?php

$file = fopen('mid.txt', 'a');

while(!feof($file)){
				$data = fgets($file);
				$user = explode('|', $data);
				if($_SESSION['uid'] == trim($user[0]) && $_POST['password'] == trim($user[1])){
					
				$user = $_SESSION['uid']."|".$_POST['newpassword']."|".$_POST['retype']."|".$_SESSION['user_name']."|".$_SESSION['em']."|".$_SESSION['user_type']."\n";
			    fwrite($file, $user);
			    fclose($file);

				}
				}


?>