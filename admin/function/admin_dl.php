<?php
include('connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM user WHERE user_id= '$id' " ;
$conn->query($sql);
header('../index.php'); 
