<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM catigries WHERE id= '$id' " ;
$conn->query($sql);
header('Location:../cat.php'); 
