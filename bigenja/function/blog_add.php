<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$bloghead = $_POST['bloghead'];
$blogdet = $_POST['blogdet'];
$cat = $_POST['cat'];
$date = date("Y/m/d");
$imgname = $_FILES['img']['name'];
$imgsize = $_FILES['img']['size'];
$imgtmp = $_FILES['img']['tmp_name'];
$imgtype = $_FILES['img']['type'];
$imgextallow = array("jpeg","jpg","png","gif");
$ss = explode('.',$imgname);
$sss = end($ss);
$imgext = strtolower($sss);
if (in_array($imgext, $imgextallow)) {
	$img = rand(0,1000000).'_'.$imgname;
	move_uploaded_file($imgtmp, "uploads//".$img);
	}



$sql = "INSERT INTO blog 
		(head,details,category,datet,image)
		VALUES ('$bloghead','$blogdet','$cat','$date','$img')";
$conn->query($sql) ;
header('Location:../blog.php');
}