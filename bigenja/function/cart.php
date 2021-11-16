<?php
include 'connect.php';

$user_id = $_POST['userid'];
$product_id = $_POST['proid'];
$count = $_POST['count'];



$getrow = "SELECT * FROM  cart WHERE product_id='$product_id' and user_id='$user_id'";
$result = $conn->query($getrow);
 
$count_result = $result->num_rows;
$row = $result->fetch_assoc();
$cont = $row['count'];


if ($count_result==0) {
	$sql = "INSERT INTO cart 
					(user_id,product_id,count)
		VALUES ('$user_id','$product_id','$count')";
		$conn->query($sql);
		echo $conn->error;
} else {
	$count= $count + $cont;
	$sql = "UPDATE cart SET count = '$count' WHERE product_id = '$product_id' and user_id='$user_id'";
	$conn->query($sql);
	echo $conn->error;
}

	
?>