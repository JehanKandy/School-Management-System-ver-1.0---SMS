<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADDED</title>
</head>
<body>
	<?php
		$con = mysqli_connect('localhost','root','','school_test');

		$index = $_POST['index_no'];
		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$tp = $_POST['tp'];

		$q = "insert into teacher values('$index','$fn','$ln','$tp')";
		$result = mysqli_query($con, $q);

	?>
</body>
</html>