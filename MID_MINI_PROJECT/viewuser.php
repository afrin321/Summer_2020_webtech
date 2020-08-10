
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<table border="1">
			<?php

			$file  = fopen('mid.txt', 'r');
			while(!feof($file)){
			$data = fgets($file);
			$user = explode('|', $data);
			echo "<tr><td>".trim($user[0])."</td><td>".trim($user[1])."</td><td>".trim($user[2])."</td><td>".trim($user[3])."</td><td>".trim($user[4])."</td><td>".trim($user[5])."</td></tr>";


		}

			?>
		</table>
	</form>

</body>
</html>