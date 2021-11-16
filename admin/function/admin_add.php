<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$username = $_POST['username'];
$password = $_POST['password'];
$passwordhash = md5($password);
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$groubid = $_POST['groubid'];
$imgname = $_FILES['img']['name'];
$imgsize = $_FILES['img']['size'];
$imgtmp = $_FILES['img']['tmp_name'];
$imgtype = $_FILES['img']['type'];
$imgextallow = array("jpeg","jpg","png","gif");
$sss = end(explode('.',$imgname));
$imgext = strtolower($sss);
if (in_array($imgext, $imgextallow)) {
	$img = rand(0,1000000).'_'.$imgname;
	move_uploaded_file($imgtmp, "uploads//".$img);
	}


$sql = "INSERT INTO user 
		(user_name,password,email,full_name,groub_id,image)
		VALUES ('$username','$passwordhash','$email','$fullname','$groubid','$img')";
$conn->query($sql) ;
header('Location:../index.php');
}