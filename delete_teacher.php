<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DELETE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>

	<?php
		$con = mysqli_connect('localhost','root','','school_test');
	
		$index = $_POST['index'];

		$q = "select * from teacher where index_no =  ".$index;
		$result = mysqli_query($con, $q);

		while ($r = mysqli_fetch_assoc($result)) {
		
		?>
		<h1>Delete <?php echo $r['fname']; ?> from Database</h1>
		<br><hr><br>
	<form action="deleted_teacher.php" method="POST">
		<table border="0">
			<tr>
				<td>
					<p class="p1"> Index Number</p>
				</td>
				<td>
					:
				</td>
				<td>
					<p class="p3"><?php echo $r['index_no']; ?></p>
					<input type="hidden" name="index" value= "<?php echo $r['index_no'];  ?>">
				</td>
			</tr>
			<tr>
				<td>
					<p class="p1"> First Name </p>
				</td>
				<td>
					:
				</td>
				<td>
					<p class="p3"><?php echo $r['fname']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="p1"> Last Name </p>
				</td>
				<td>
					:
				</td>
				<td>
					<p class="p3"><?php echo $r['lname']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="p1">Date of Birth </p>
				</td>
				<td>
					:
				</td>
				<td>
					<p class="p3"><?php echo $r['tp_no']; ?></p>

				</td>
			</tr>
		<?php } ?>
		<tr>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
				<input type="submit" value="DELETE" class="submit_d">
			</td>
		</tr>


		</table>
		
	</form>
	<hr>
	<a href="index.php"><button class="h_button">To Home</button></a>
</center>
</body>
</html>