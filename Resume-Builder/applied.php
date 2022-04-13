
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Applied Students Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<?php
	include 'navbar.php';?>
	<h2 class="text-center">All Students Data</h2>
</body>
</html>
<?php
include 'connection.php';
$query = "SELECT * FROM student";
$res = mysqli_query($connect, $query);
$output = "";
$output .= "
	<table class='table table-bordered'>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Username</th>
			<th>Email</th>
			<th>State</th>
			<th>Country</th>
		</tr>
";
if(mysqli_num_rows($res) < 1) {
	$output .= "
		<tr>
			<td colspan = '10' class='text-center'>No Students Data to show</td>

		</tr>
	";
}
while($row = mysqli_fetch_array($res)) {
	$output .= "
		<tr>
			<td>".$row['fname']."</td>
			<td>".$row['lname']."</td>
			<td>".$row['uname']."</td>
			<td>".$row['email']."</td>
			<td>".$row['state']."</td>
			<td>".$row['country']."</td>
	";
}
$output .= "
	</tr>
	</table>
";


echo $output;
?>