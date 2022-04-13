<?php
include("connection.php");
if(isset($_POST['Submit'])) {
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$error = array();
	if(empty($firstname))
		$error['ac'] = "Enter Firstname";
	else if(empty($lastname))
		$error['ac'] = "Enter Lastname";
	else if(empty($username))
		$error['ac'] = "Enter Username";
	else if($password=="")
	$error['ac'] = "Enter password";
	else if(empty($email))
		$error['ac'] = "Enter Email Address";
	else if($contact=="")
		$error['ac'] = "Enter contact number";
	if(count($error) == 0) {
		$query1 = "SELECT * FROM student where uname = '$username' or password = '$password'";
		$qq = mysqli_query($connect, $query1);
		$row = mysqli_fetch_array($qq); 
		if(mysqli_num_rows($qq) == 0) {
 			$query = "INSERT INTO data(fname,lname,uname,email,password,contact)VALUES('$firstname','$lastname','$username','$email','$password','$contact')";
 			$result = mysqli_query($connect, $query);
 			if($result) {
 				echo "<script>alert('You have successfully signed up')</script>";
 				
 			}
 			else{
 				echo "<script>alert('Failed')</script>";
 			}
 			header("Location: login.php");
 		}
 		else {
 			echo "<script>alert('Your Data already exits')</script>";
 		}
 	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signup	.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="validation.js"></script>
</head>
<body id="signup">
	<div class="container">
		<h2 class="text-center text-info">Sign Up</h2>
		<form method="post" name="RegForm" action="signup.php" onsubmit="return validate();">
			<div class="form-group">
				<label><h3>Firstname</h3></label>
				<input type="text" name="fname"  autocomplete="off" placeholder="Enter Firstname"id="f"><br>
				<label><h3>Lastname</h3></label>
				<input type="text" name="lname" autocomplete="off" placeholder="Enter Lastname" id="l"><br>
				<label><h3>Username</h3></label>
				<input type="text" name="uname" autocomplete="off" placeholder="Enter Username" id="u"><br>
				<label><h3>Password</h3></label>
				<input type="text" name="password" autocomplete="off" placeholder="Enter password" id="p"><br>
				<label><h3>Email</h3></label>
				<input type="text" name="email" autocomplete="off" placeholder="Enter Your Email"id="e"><br>
				<label><h3>Contact</h3></label>
				<input type="text" name="contact" autocomplete="off" placeholder="Enter Your Contact number" id="c"><br>
				<label><h3>Gender</h3></label><br>
     			<div class="btn-radio">  
       				<input type="radio" name="gender" id="Male">  
       				<label for="Male">Male</label>    
       				<input type="radio" name="gender" id="Female">   
       				<label for="Female">Female</label>    
       				<input type="radio" name="gender" id="other">   
       				<label for="other">other</label>  
     			</div>
     			<br>
				<input type="submit" name="Submit" value="signup" class="btn btn-success">	
			</div>
		</form>
	</div>
</body>
</html>