<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database = "student";
$connect = mysqli_connect($server_name, $username, $password, $database);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "HI";
//$query = "INSERT INTO student VALUES('Sarvesh','Fegade','sar','Sarvesh@gmail.com','Maharashtra','India')";
//echo $query;
//$result = mysqli_query($connect, $query);
//echo $result;
?>