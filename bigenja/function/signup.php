<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$username = $_POST['username'];
$password = $_POST['password'];
$passwordhash = md5($password);
$email = $_POST['email'];

$sql = "INSERT INTO user 
		(user_name,password,email)
		VALUES ('$username','$passwordhash','$email')";
$conn->query($sql) ;
header('Location:../login.php');
}