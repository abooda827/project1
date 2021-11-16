<div class>
		<form action="function/product_add.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<div>
					<input type="hidden" name="productid" value="<?php echo $row['product_id']?>">
					<label class="control-label col-md-4" for="name">Product name:</label>
					<input class="form-control " id="focusedInput" placeholder="Product name" name="name" type="text" autofocus="" value="">
				</div>
				<div >
					<label class="control-label col-md-4" for="content">Content:</label>
					<input class="form-control " id="focusedInput" placeholder="Content" name="content" type="text" value="">
				</div>
				<div>
					<label class="control-label col-md-4" for="quantity">Quantity:</label>
					<input class="form-control " id="focusedInput" placeholder="Quantity" name="quantity" type="number" value="">
				</div>
				<div>
					<label class="control-label col-md-4" for="price">Price:</label>
					<input class="form-control " id="focusedInput" placeholder="Price" name="price" type="text" value="">
				</div>
				<div>
					<label class="control-label col-md-4" for="seller">The Seller:</label>
					<input class="form-control " id="focusedInput" placeholder="Seller" name="seller" type="text" value="">
				</div>
				<div>
					<label class="control-label col-md-4" for="brand">Brand:</label>
					<input class="form-control " id="focusedInput" placeholder="Brand" name="brand" type="text" value="">
				</div>
					<div class="form-group">
      					<label class="control-label col-md-4" for="cat">Catigries (select one):</label>
      					<select class="form-control" name="cat">
      					<option disabled selected>Catigries</option>
<?php
include('function/connect.php'); 
$sql = "SELECT * FROM catigries" ; 
$result = $conn->query($sql); 
while($row = $result->fetch_assoc()){
?>
  						<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php
}
 ?>						
					</select>
					</div>
					<div>
					<label class="control-label col-md-4" for="img">Img:</label>
					<input class="form-control " id="focusedInput" name="img" type="file" value="">
					</div>

					<input class="btn btn-success" type="submit" value="ADD">
					
					
	</div>
					