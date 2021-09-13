<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DELETED</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="all_teacher.php"><button class="button">See Updated All Teachers</button></a><br><br>

		<?php
			$con = mysqli_connect('localhost','root','','school_test');
			$index = $_POST['index'];

			$q = "delete from teacher where index_no =  ".$index;

			$result = mysqli_query($con,$q);
			echo "Recode Successfully Deleted............!";

		?>
</body>
</html>