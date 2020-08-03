<?php 
session_start();

?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<td>
				<?php $usertype = $_POST['usertype'] ?>
				echo $usertype.'s Homepage.;
			</td>
			
		</tr>

	</table>


</body>
</html>