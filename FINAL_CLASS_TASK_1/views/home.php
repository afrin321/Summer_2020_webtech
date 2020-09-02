<?php
	require_once('../php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home <?=$_SESSION['username']?></h1>

	<a href="create.php"> Create New User</a> |
	<a href="#" onclick="ulist()" id="mylink"> User List</a> |
	<a href="../php/logoutController.php"> logout</a>
	<div id="data"></div>

	<script type="text/javascript">
		 function ulist(){
		 	var name="me";
		 	var xhttp = new XMLHttpRequest();
		 	xhttp.open('POST', '../php/userlistController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name);

			//document.getElementById('data').innerHTML = this.statusText;

			

			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('data').innerHTML =  this.responseText;

				}
			}
		

		}

	</script>

</body>
</html>
