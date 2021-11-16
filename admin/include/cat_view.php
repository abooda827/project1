<button class="btn btn-success" ><a style="color: white;" href="?do=add">ADD Category</a></button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Control</th>

    </tr>
  </thead>
 
  <tbody>
     <?php
include('function/connect.php'); 
$sql = "SELECT * FROM catigries" ; 

$result = $conn->query($sql); 
$i =1;
while($row = $result->fetch_assoc()){
  
  ?>
    <tr>
      <th scope="row"><?php echo $i++?></th>
      <td><?=$row['name'];?></td>
      <td>
        <button class="btn btn-warning"><a style="color: white;" href="?do=update&&id=<?php echo $row['id'] ?>">update</a></button>
        <button class="btn btn-danger"><a style="color: white;" href="function/cat_dl.php?do=delete&&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">delete</a></button>
      </td>
    </tr>
    <?php
}

 ?>

  </tbody>
</table>
</table>