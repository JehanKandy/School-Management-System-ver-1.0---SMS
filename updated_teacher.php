<?php 

	$con = mysqli_connect('localhost','root','','school_test');

	$index = $_POST['index'];
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$tp = $_POST['tp'];

	$q = "UPDATE teacher SET fname = '$fn', lname = '$ln', tp_no = '$tp' WHERE index_no =".$index;

	echo $q;
	$result = mysqli_query($con,$q);
	echo $result;
?>