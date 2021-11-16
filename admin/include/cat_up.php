<?php
$id = $_GET['id'];
$sql = "SELECT * FROM catigries WHERE id=$id" ; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 ?>
	<div>
		<form action="function/cat_up.php"  method="post" enctype="multipart/form-data">
			<fieldset>
				<div>
					<input type="hidden" name="catid" value="<?php echo $row['id']?>">
					<label class="control-label col-md-4" for="username">Name:</label>
					<input class="form-control " id="focusedInput" placeholder="User name" name="catname" type="text" autofocus="" value="<?php echo $row['name']?>">
				</div>
				
					<input type="submit" value="update">
					
					
	</div>