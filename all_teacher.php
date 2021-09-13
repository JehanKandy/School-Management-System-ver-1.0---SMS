<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Teachers</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="index.php"><button class="h_button">To Home</button></a>
	<?php
		$con = mysqli_connect('localhost','root','','school_test');

		$q = "select * from teacher";

		$result = mysqli_query($con, $q);
	?>

<h1 align="center">All Teachers</h1>
<table class="styled-table" align="center">
    <thead>
        <tr>
            <th>Index Number</th>
            <th>First Name</th>
			<th>Last Name</th>
			<th>Tele Phone Number</th>
        </tr>
    </thead>
    <?php
    	while ($r = mysqli_fetch_assoc($result)) {
    ?>
     <tbody>
        <tr>
            <td><?php echo $r['index_no'];  ?></td>
            <td><?php echo $r['fname'];  ?></td>
			<td><?php echo $r['lname'];  ?></td>
			<td><?php echo $r['tp_no'];  ?></td>
		<?php } ?>
        </tr>
    </tbody>
</table>

</body>
</html>