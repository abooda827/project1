<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$productid = $_POST['productid'];
$name = $_POST['name'];
$content = $_POST['content'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$seller = $_POST['seller'];
$brand = $_POST['brand'];
$cat = $_POST['cat'];
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

$sql = "UPDATE product 
		SET name = '$name',content = '$content',quantity = '$quantity',price = '$price',seller = '$seller',brand = '$brand',catigries = '$cat',image = '$img' 
		WHERE product_id='$productid'" ;
$conn->query($sql) ;
header('Location:../product.php');
}