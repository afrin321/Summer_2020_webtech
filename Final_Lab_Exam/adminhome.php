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


	<a href="#" onclick="ulist()" id="mylink"> Employer List</a> |
	<a href="#" onclick="SearchUserInterface()" id="searchlink"> Search Employer</a> |
	<a href="../php/logoutController.php"> logout</a>


			<div id="namedata"> Name <input type="text" name="n" onblur="searchUser()" id="name_val"> </div>


	



	<div id="data"></div>
	<div id="sdata"></div>

	<script type="text/javascript">

		document.getElementById('namedata').style.display = "none";
		document.getElementById('sdata').style.display = "none";
		document.getElementById('data').style.display = "none";


		 function ulist(){

		 	if(document.getElementById('namedata').style.display = "block"){
		 		document.getElementById('namedata').style.display = "none";
		 	}
		 	if(document.getElementById('sdata').style.display = "block"){
		 		document.getElementById('sdata').style.display = "none";
		 	}


		 	
		 	var name="me";
		 	var xhttp = new XMLHttpRequest();
		 	xhttp.open('POST', '../php/userlistController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name);

			//document.getElementById('data').innerHTML = this.statusText;

			

			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('data').style.display = "block";
					document.getElementById('data').innerHTML =  this.responseText;

				}
			}
		

		}

		function SearchUserInterface(){

			document.getElementById('data').style.display = "none";
			document.getElementById('namedata').style.display = "block";


		}

		function searchUser(){
			var sname = document.getElementById('name_val').value;
			
		 	var xhttp = new XMLHttpRequest();
		 	xhttp.open('POST', '../php/searchUserController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('namedata='+sname);

			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('sdata').style.display = "block";
					document.getElementById('sdata').innerHTML = this.responseText;

				}



		}
	}

	</script>

</body>
</html>
