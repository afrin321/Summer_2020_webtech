<?php
	require_once('../php/sessionController.php');
	require_once('../service/userService.php');

	if (isset($_POST['namedata'])) {
		//echo "hii";
		$users = getByName($_POST['namedata']);

		$d = "	<table border=1> 
		<tr>			
		    <td>ID</td> 
			<td>Employer Name</td>
			<td>Company Name</td>
			<td>Contact No</td>
			<td>User name</td>


		</tr>";

		for($i=0; $i != count($users); $i++ ){
			$d .= "<tr>
				<td>{$users[$i]['id']}</td>
				<td>{$users[$i]['emp_name']}</td>
				<td>{$users[$i]['comp_name']}</td>
				<td>{$users[$i]['contactno']}</td>
				<td>{$users[$i]['username']}</td>

			</tr>";
		}

			$d .= "</table>";

	echo $d;


	}
?>