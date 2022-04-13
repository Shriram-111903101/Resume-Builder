<?php
include("connection.php");
if(isset($_POST['Submit'])) {
	$username = $_POST['uname'];
	$password = $_POST['password'];
	$error = array();
	if(empty($username))
		$error['ac'] = "Enter Username";
	else if(empty($password))
		$error['ac'] = "Enter password";
	if(count($error) == 0) {
		$query1 = "SELECT * FROM data where uname = '$username' and password = '$password'";
		$qq = mysqli_query($connect, $query1);
		$row = mysqli_fetch_array($qq); 
		if(mysqli_num_rows($qq) == 0) {
 			// $query = "INSERT INTO data(uname,password)VALUES('$username','$password')";
 			// $result = mysqli_query($connect, $query);
 			// if($result) {
 			// 	echo "<script>alert('You have successfully applied')</script>";
 			// header("Location: index.php");
 			// }
 			// else{
 			// 	echo "<script>alert('Failed')</script>";
 			// }
 			echo "<script>alert('Signup First!!')</script>";
 		}
 		else {
 			// echo "<script>alert('Enter Unique Username or password')</script>";
 			header("Location: index.php");
 		}
 	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="validation.js"></script>
</head>
<body id="login">
	<div class="top-heading">
		<h1>RESUME BUILDER</h1>
	</div>
	<div class="container">
		<h2 class="text-center text-info">Log In</h2>
		<form method="post" name="RegForm" action="login.php" onsubmit="return validate();">
			<div class="form-group">
				<label><h3>Username</h3></label>
				<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username" id="u">
			</div>
			<div class="form-group">
				<label><h3>Password</h3></label>
				<input type="text" name="password" class="form-control" autocomplete="off" placeholder="Enter Your password" id="p">
			</div>
			<div class="btn">
				<a href="index.php"><input type="submit" name="Submit" value="Login" class="btn btn-success"></a><br>
				<a id="s" href="signup.php">Create an account</a><br>
			</div>
		</form>
	</div>
</body>
</html>