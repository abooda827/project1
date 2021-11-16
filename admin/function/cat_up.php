<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$catid = $_POST['catid'];
$catname = $_POST['catname'];


$sql = "UPDATE catigries 
		SET name = '$catname'
		WHERE id='$catid'" ;
		$conn->query($sql) ;
		
header('Location:../cat.php');
}