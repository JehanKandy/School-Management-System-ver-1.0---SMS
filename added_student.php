<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADDEED</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="index.php"><button class="h_button">To Home</button></a>
	<a href="add_student.php"><button class="button">Add Student</button></a>
	
	<?php
		$con = mysqli_connect('localhost','root','','school_test');

		$index = $_POST['index_no'];
		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$dob = $_POST['dob'];

		$q = "insert into student values('$index','$fn','$ln','$dob')";
		$result = mysqli_query($con, $q);
	?>
</body>
</html>