<!DOCTYPE html>
<html>
<head>
	<table>
		<tr>
			<td><img src="logo.png"></td>
			<td size="100%"></td>
			<td align="right">Logged in as 
                <?php 
				$profilename = $_COOKIE['userName'];
				echo " $profilename"
				?> | <a href="">Logout</a>
			</td>
		</tr>
	</table>
		


</head>
<body>
<fieldset>
    <legend><b>FORGOT PASSWORD</b></legend>
    <form action="email_check.php" method="post">
		Enter Email:
        <input type="text" name="email" />
        <hr />
        <input type="submit" value="Submit" name="submit" />
    </form>
</fieldset>



</body>
<footer align="center">Copyright @ 2017</footer>
</html>
