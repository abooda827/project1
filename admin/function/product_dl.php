<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE product_id= '$id' " ;
$conn->query($sql);
header('Location:../product.php'); 