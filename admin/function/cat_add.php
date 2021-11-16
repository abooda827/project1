<?php
include('connect.php');
if ($_SERVER['REQUEST_METHOD']== "POST" )  {
$catname = $_POST['catname'];

$sql = "INSERT INTO catigries 
		(name)
		VALUES ('$catname')";
$conn->query($sql) ;
header('Location:../cat.php');
}