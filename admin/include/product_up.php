<?php
include 'function/connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE product_id=$id" ; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 ?>
	<div>
		<form action="function/product_up.php"  method="post" enctype="multipart/form-data">
			<fieldset>
				<div>
					<input type="hidden" name="productid" value="<?php echo $row['product_id']?>">
					<label class="control-label col-md-4" for="name">Product name:</label>
					<input class="form-control " id="focusedInput" placeholder="Product name" name="name" type="text" autofocus="" value="<?php echo $row['name']?>">
				</div>
				<div >
					<label class="control-label col-md-4" for="password">Content:</label>
					<input class="form-control " id="focusedInput" placeholder="Content" name="content" type="text" value="<?php echo $row['content']?>">
				</div>
				<div>
					<label class="control-label col-md-4" for="quantity">Quantity:</label>
					<input class="form-control " id="focusedInput" placeholder="Quantity" name="quantity" type="number" value="<?php echo $row['quantity']?>">
				</div>
				<div>
					<label class="control-label col-md-4" for="price">Price:</label>
					<input class="form-control " id="focusedInput" placeholder="Price" name="price" type="text" value="<?php echo $row['price']?>">
				</div>
				<div>
					<label class="control-label col-md-4" for="seller">The Seller:</label>
					<input class="form-control " id="focusedInput" placeholder="Seller" name="seller" type="text" value="<?php echo $row['seller']?>">
				</div>
				<div>
					<label class="control-label col-md-4" for="brand">Brand:</label>
					<input class="form-control " id="focusedInput" placeholder="Brand" name="brand" type="text" value="<?php echo $row['brand']?>">
				</div>
				<div class="form-group">
      					<label class="control-label col-md-4" for="cat">Catigries (select one):</label>
      					<select class="form-control" name="cat">
<?php
include('function/connect.php'); 
$sql_cat = "SELECT * FROM catigries" ; 
$result_cat = $conn->query($sql_cat); 
while($row_cat = $result_cat->fetch_assoc()){
?>
  						<option <?php if ($row_cat['id']==$row['catigries']) {
  							echo "selected";}?> value="<?php echo $row_cat['id'];?>"><?php echo $row_cat['name'];?></option>
<?php
}
 ?>						
					</select>
					</div>
					<div>
					<label class="control-label col-md-4" for="img">Img:</label>
					<input class="form-control " id="focusedInput" name="img" type="file" value="">
					</div>
					<input type="submit" class="btn btn-success" value="update">
					
					
	</div>