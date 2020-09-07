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
			<legend>SignUp for Employee</legend>
			<table>
				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="emp_name" id="empname"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="comp_name" id="compname"></td>
				</tr>
				<tr>
					<td>Contact No.</td>
					<td><input type="text" name="emp_name" id="contno"></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" id="uname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="userpassword"></td>
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
		var ename = document.getElementById('empname').value;
		var cname = document.getElementById('compname').value;
		var cont = document.getElementById('contno').value;
		var username = document.getElementById('uname').value;
		var password = document.getElementById('userpassword').value;

		


		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "../php/signupController.php", true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		//xhttp.send("fname=Henry&lname=Ford"); 
		xhttp.send("""username="+u+"&password="+p+"&email="+e); 

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


