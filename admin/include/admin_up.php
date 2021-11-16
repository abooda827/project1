<?php
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE user_id=$id" ; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 ?>
	<div>
		<form action="function/admin_up.php"  method="post" enctype="multipart/form-data">
			<fieldset>
				<div>
					<input type="hidden" name="userid" value="<?php echo $row['user_id']?>">
					<label class="control-label col-md-4" for="username">Username:</label>
					<input class="form-control " id="focusedInput" placeholder="User name" name="username" type="text" autofocus="" value="<?php echo $row['user_name']?>">
				</div>
				<div >
					<label class="control-label col-md-4" for="password">Password:</label>
					<input class="form-control " id="focusedInput" placeholder="Password" name="password" type="password" value="">
				</div>
				<div>
					<label class="control-label col-md-4" for="email">Email:</label>
					<input class="form-control " id="focusedInput" placeholder="email" name="email" type="email" value="<?php echo $row['email']?>">
				</div>
				<div>
					<label class="control-label col-md-4" for="fullname">Fullname:</label>
					<input class="form-control " id="focusedInput" placeholder="full name" name="fullname" type="text" value="<?php echo $row['full_name']?>">
				</div>
				<div>
					<label class="control-label col-md-4" for="img">Img:</label>
					<input class="form-control " id="focusedInput" name="img" type="file" value="">
					</div>
				<div>
					<label class="control-label col-md-4" for="groubid">Groubid:</label>
					<input class="form-control " id="focusedInput" placeholder="groub id" name="groubid" type="text" value="<?php echo $row['groub_id']?>">
				</div>
					<input type="submit" value="update">
					
					
	</div>