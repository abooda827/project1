<?php
include('connect.php');
session_start();
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$content = $_POST['content'];
$blog_id = $_POST['blogid'];
$user_id = $_POST['userid'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$date = date("Y/m/d");

$sql = "INSERT INTO blog_comment 
		(content,date,blog_id,user_id,user_name,email)
		VALUES ('$content','$date','$blog_id','$user_id','$user_name','$email')";

$conn->query($sql) ;

//header('Location:../blog-details.php');
}