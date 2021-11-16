<button class="btn btn-success" ><a style="color: white;" href="?do=add_p">ADD Product</a></button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Content</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Seller</th>
      <th scope="col">Brand</th>
      <th scope="col">Cat</th>
      <th scope="col">image</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
 
  <tbody>
     <?php
     include 'function/connect.php';
$sql = "SELECT * FROM product" ; 

$result = $conn->query($sql); 
$i = 1;

while($row = $result->fetch_assoc()){
  
  ?>
    <tr>
      <th scope="row"><?php echo $i++?></th>
      <td><?=$row['name'];?></td>
      <td><?=$row['content'];?></td>
      <td><?=$row['quantity'];?></td>
      <td><?=$row['price'];?></td>
      <td><?=$row['seller'];?></td>
      <td><?=$row['brand'];?></td>
      <td><?=$row['catigries'];?></td>
      <td><?php
        if (!empty($row['image'])) {
          echo "<img style='width: 50px;height: 50px;'src='function/uploads/".$row['image']."'>";  
        } 
        else{echo "<img style='width: 50px;height: 50px;'src='function/uploads/3571538925420backblue.gif'>";}
      
      ?></td>
      <td>
        <button class="btn btn-warning"><a  style="color: white;" href="?do=update_p&&id=<?php echo $row['product_id'] ?>">update</a></button>
        <button class="btn btn-danger"><a  style="color: white;" href="function/product_dl.php?do=delete_p&&id=<?php echo $row['product_id'] ?>" onclick="return confirm('Are you sure?')">delete</a></button>
      </td>
    </tr>
    <?php
}

 ?>

  </tbody>
</table>


</table>