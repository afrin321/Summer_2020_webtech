<?php
	
	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
	

</head>
<body>
	<form>
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" id="uname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="userpassword"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="useremail"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="ajax()"></td>
					<td id="loglink"><a href="login.php">Login here.</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<div id="data"></div>
	<div id="un"></div>
		<script type="text/javascript">

		document.getElementById('loglink').style.display = "none";



		function ajax(){
		var u = document.getElementById('uname').value;
		
		var p = document.getElementById('userpassword').value;
		var e = document.getElementById('useremail').value;


		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "../php/signupController.php", true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		//xhttp.send("fname=Henry&lname=Ford"); 
		xhttp.send("username="+u+"&password="+p+"&email="+e); 

		//document.getElementById('data').innerHTML = this.statusText;

		xhttp.onreadystatechange = function()
		{
			document.getElementById('data').innerHTML =  this.statusText;
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('loglink').style.display = "block"; 
					document.getElementById('data').innerHTML =  this.responseText;
					//document.getElementById('un').innerHTML = u;

				}
			}

		}

	}

		

	</script>

</body>
</html>


