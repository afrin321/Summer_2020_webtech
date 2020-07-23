<!DOCTYPE html>












<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['sname'];
		if($name == ""){ echo "*name cannot be empty!";}
		if(str_word_count($name)<2){echo "*name has to be atleast two words!";}
		if(!preg_match("/^[a-zA-Z \.\-]+$/",$name)){echo "*name contains invalid character!";}
		if(!preg_match("/^[a-zA-Z]+$/", $name[0])){echo "*name must start with a letter!";}

		$email = $_POST['s_email'];
		if($email == ""){ echo "*email cannot be empty!";}
		if(!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.com$/", $email)){"*email address not correct!";} 

		//$gender = $_POST['s_gender'];
		if (empty($_POST['s_gender'])) {echo "*gender is required!";}

		$day = $_POST['dob_day'];
		if (empty($day)) {echo "*day is required in DOB!";}
		if ($day<1 || $day>31) {echo "*day is invalid!"; }

		$month = $_POST['dob_month'];
		if (empty($month)) {echo "*month is required in DOB!";}
		if ($month<1 || $month>12) {echo "*month is invalid!"; }

		$year = $_POST['dob_year'];
		if (empty($year)) {echo "*year is required in DOB!";}
		if ($year<1900 || $year>2016) {echo "*year is invalid!"; }

		$bloodgroup = $_POST['s_bloodgroup'];
		if (empty($bloodgroup)) {echo "*bloodgroup is required!";}

		//$degree = $_POST['s_degree'];
		if (empty($_POST['s_degree'])) {echo "*atleast one degree must be selected!";}

		






	}


?>










<html>
<head>
	<title>HTML Forms</title>
</head>
<body>
	<form method="post" action="another.php">
			<table border="1">
				<tr>
					<td colspan="3"><center><h2>PERSON PROFILE</center></h2></td>
				</tr>
				<tr>
					<td size="30%">Name</td>
					<td size="40%"><input type="text" value="" name="sname"></td> 
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Email</td>
					<td size="40%"><input type="text" value="" name="s_email"></td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Gender</td>
					<td size="40%"><input type="radio" value="female" name="s_gender" > Male <input type="radio" value="male" name="s_gender" > Female <input type="radio" value="other" name="s_gender" > Other </br></td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Date of birth</td>
					<td size="40%"><input type="text" value="" name="dob_day">/<input type="text" value="" name="dob_month">/<input type="text" value="" name="dob_year">(dd/mm/yyyy)</td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Blood Group</td>
					<td size="40%">Select: 
				<select name="s_bloodgroup">
					<option value=""></option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
				<br></td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Degree</td>
					<td size="40%"><input type="checkbox" value="ssc" name="s_degree"> SSC <input type="checkbox" value="hsc" name="s_degree" > HSC <input type="checkbox" value="bsc" name="s_degree"> BSC. <input type="checkbox" value="msc" name="s_degree"> MSC. </td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Photo</td>
					<td size="40%"><input type="button" value="Browse" > No file selected.</td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td colspan="3" ></td>
				</tr>
				<tr>
					<td colspan="3" align="right"><input type="submit" name="" value="Submit"> <input type="Reset" name="" value="Reset"></td>
				</tr>



			</table>
		</form>






</body>
</html>