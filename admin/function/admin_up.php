<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$userid = $_POST['userid'];
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
$imgext = strtolower(end(explode('.', $imgname)));
if (in_array($imgext, $imgextallow)) {
	$img = rand(0,1000000).'_'.$imgname;
	move_uploaded_file($imgtmp, "uploads//".$img);
	}

$sql = "UPDATE user 
		SET user_name = '$username',email = '$email',full_name = '$fullname',groub_id = '$groubid' 
		WHERE user_id='$userid'" ;
		$conn->query($sql) ;
		if (!empty($passwordhash)) {
			$sql = "UPDATE user SET password = '$passwordhash' WHERE user_id='$userid'";
		}
		if (!empty($img)) {
			$sql = "UPDATE user SET image = '$img' WHERE user_id='$userid'";
		}
$conn->query($sql) ;
header('Location:../index.php');
}