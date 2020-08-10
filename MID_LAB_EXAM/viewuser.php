
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
			echo "<tr><td>".$user[0]."</td><td>".$user[1]."</td><td>".$user[2]."</td><td>".$user[3]."</td><td>".$user[4]."</td><td>".$user[5]."</td></tr>";


		}

			?>
		</table>
	</form>

</body>
</html>