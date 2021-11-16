<?php
include 'connect.php';

$rate_index = $_POST['index'];
$user_id = $_POST['userid'];
$product_id = $_POST['proid'];


$gettotrate = "SELECT * FROM  product WHERE product_id='$product_id'";
$result = $conn->query($gettotrate);
$totrate = $result->fetch_assoc();
$count = $totrate['total_rate'];

$getrows = "SELECT * FROM  rate WHERE product_id='$product_id'";
$result2 = $conn->query($getrows);
$rows = $result2->num_rows;



$getuser = "SELECT * FROM  rate WHERE product_id='$product_id' and user_id='$user_id'";
$result2 = $conn->query($getuser);
$users = $result2->num_rows;


if ($users==0) 
{
	$sql = "INSERT INTO rate 
				(user_id,product_id,rate)
		VALUES ('$user_id','$product_id','$rate_index')";
	$conn->query($sql);

	
}
else
{


	$sql = "UPDATE rate SET rate = '$rate_index' WHERE product_id = '$product_id' and user_id='$user_id'";
	$conn->query($sql);

}
if ($rows !=0) {
	$gettotal = "SELECT SUM(rate) FROM  rate WHERE product_id='$product_id'";
	$result_tot = $conn->query($gettotal);
	$totalcount = $result_tot->fetch_assoc();
	$totcount = $totalcount['SUM(rate)'];


	$rate = $totcount / $rows;
		
}
else
{
	$totcount = $rate_index;
	$rate = $rate_index;
}
$sql2 = "UPDATE product SET rate = '$rate',total_rate = '$totcount' 
			WHERE product_id = '$product_id'";
	$conn->query($sql2);
?>

