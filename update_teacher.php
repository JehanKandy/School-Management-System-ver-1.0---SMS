<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UPDATE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<?php
		$con = mysqli_connect('localhost','root','','school_test');
		$index = $_POST['index'];
	
		$q = "select * from teacher where index_no =  ".$index;

		$result = mysqlI_query($con,$q);

	?>

	<form action="updated_teacher.php" method="POST">
		<?php
  		 	while ($r = mysqli_fetch_assoc($result)){
		?>

		<h1>Update <?php echo $r['fname']; ?>'s Infromation</h1>
		<hr>
		<table border="0">
			<tr>
				<td>
					<p class="p2">Index Numer : <?php echo $r['index_no'];  ?></p>
				</td>
				<td>
					<input type="hidden" name="index" value= "<?php echo $r['index_no'];  ?>"><br>
				</td>
			</tr>
			<tr>
				<td>
					<p class="p2">First Number : </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="fn" class="row" value="<?php echo $r['fname'];  ?> ">
				</td>

			</tr>
			<tr>
				<td>
					<p class="p2">Last Number : </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="ln" class="row" value="<?php echo $r['lname'];  ?> ">
				</td>

			</tr>
 			<tr>
				<td>
					<p class="p2">Tele Phone Number : </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="tp" class="row" value="<?php echo $r['tp_no'];  ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Update" class="row">
				</td>
			</tr>

			<?php } ?>
		</table>
		
	</form>


	</center>
</body>
</html>