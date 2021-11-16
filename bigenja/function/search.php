<?php
include 'connect.php';

$search = $_POST['search'];

$sql = "SELECT * FROM product  WHERE name LIKE '%".$search."%' LIMIT 5";
$result = $conn->query($sql);
echo "<ul>"; 
while ($row = $result->fetch_assoc()){

	$pro_id = $row['product_id'];

	echo "<li style='padding: 3px;'><a style='color: white;' href='product_details.php?id=".$pro_id."'>".$row['name']."(Product)</a></li>";

}
$sql2 = "SELECT * FROM catigries WHERE name LIKE '%".$search."%' LIMIT 5";
$result2 = $conn->query($sql2); 
while ($row2 = $result2->fetch_assoc()){
	
	$cat_id = $row2['id'];

	echo "<li style='padding: 3px;'><a style='color: white;' href='products_cat.php?id=".$cat_id."'>".$row2['name']."(Category)</a></li>";

}
echo "</ul>";
