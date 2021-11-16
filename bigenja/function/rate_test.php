<?php

include 'connect.php';

$rate_index = $_POST['index'];
$user_id = $_POST['userid'];
$product_id = $_POST['proid'];


$getrate = "SELECT * FROM  rate WHERE product_id='$product_id' and user_id='$user_id";
$result2 = $conn->query($getrate);
$user = $result2->fetch_assoc();
$rows_user = $result2->num_rows;
echo $rows_user;

if ($rows_user==0) {
	$sql = "INSERT INTO rate 
				(user_id,product_id,rate)
		VALUES ('$user_id','$product_id','$rate_index')";
	$conn->query($sql);

$gettotrate = "SELECT SUM(rate) FROM  rate WHERE product_id='$product_id'";
$result = $conn->query($gettotrate);
$totrate = $result->fetch_assoc();
$rows = $result->num_rows;
	if ($rows!=0) {
		$rate = $totrate / $rows;
	}
	else{
		$rate = 0;
	}

$total_rate = 
$sql2 = "UPDATE product SET rate = '$rate',total_rate = '$total_rate' 
			WHERE product_id = '$product_id'";
$conn->query($sql2);

}
else{
	$sql = "UPDATE rate SET rate = '$rate_index'
			WHERE product_id = '$product_id'and user_id='$user_id";
$conn->query($sql);
}






















/*
if ($rows==0) {
	$sql = "INSERT INTO rate 
				(user_id,product_id,rate)
		VALUES ('$user_id','$product_id','$rate_index')";
	$conn->query($sql);

	$sql2 = "UPDATE product SET rate = '$rate_index', total_rate = '$rate_index' WHERE product_id = '$product_id'";	
	$conn->query($sql2);

} 
else 
{
		$getuser = "SELECT * FROM  rate WHERE product_id='$product_id' and user_id='user_id'";
		$result = $conn->query($getuser);
		$user = $result->num_rows;
	if ($user == 0) 
	{
		$sql = "INSERT INTO rate 
				(user_id,product_id,rate)
		VALUES ('$user_id','$product_id','$rate_index')";
		$conn->query($sql);
	
	

		$totcount = $count + $rate_index;
		$rate = $totcount / $rows;

		$sql2 = "UPDATE product SET rate = '$rate',total_rate = '$totcount' 
			WHERE product_id = '$product_id'";
		$conn->query($sql2);

		
	}
	else
	{
		$sql = "UPDATE rate SET rate = '$rate_index' 
			WHERE product_id = '$product_id' and user_id='user_id'";
		$conn->query($sql);	
	}

	
}
*/