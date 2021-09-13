<?php 

	$con = mysqli_connect('localhost','root','','school_test');

	$index = $_POST['index'];
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$dob = $_POST['dob'];

	$q = "UPDATE student SET fname = '$fn', lname = '$ln', dob = '$dob' WHERE index_no =".$index;

	echo $q;
	$result = mysqli_query($con,$q);
	echo $result;
?>