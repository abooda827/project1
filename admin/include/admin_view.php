<button class="btn btn-success" ><a style="color: white;" href="?do=add">ADD User</a></button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Full Name</th>
      <th scope="col">Image</th>
      <th scope="col">Groub Id</th>
      <th scope="col">Control</th>

    </tr>
  </thead>
 
  <tbody>
     <?php
include('function/connect.php'); 
$sql = "SELECT * FROM user" ; 

$result = $conn->query($sql); 
$i =1;
while($row = $result->fetch_assoc()){
  
  ?>
    <tr>
      <th scope="row"><?php echo $i++?></th>
      <td><?=$row['user_name'];?></td>
      <td><?=$row['password'];?></td>
      <td><?=$row['full_name'];?></td>
      <td><?php
        if (!empty($row['image'])) {
          echo "<img style='width: 50px;height: 50px;'src='function/uploads/".$row['image']."'>";  
        } 
        else{echo "<img style='width: 50px;height: 50px;'src='function/uploads/3571538925420backblue.gif'>";}
      
      ?></td>
      <td><?=$row['groub_id'];?></td>
      <td>
        <button class="btn btn-warning"><a style="color: white;" href="?do=update&&id=<?php echo $row['user_id'] ?>">update</a></button>
        <button class="btn btn-danger"><a style="color: white;" href="function/admin_dl.php?do=delete&&id=<?php echo $row['user_id'] ?>" onclick="return confirm('Are you sure?')">delete</a></button>
      </td>
    </tr>
    <?php
}

 ?>

  </tbody>
</table>
</table>
