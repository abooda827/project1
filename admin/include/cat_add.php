<div>
		<form action="function/cat_add.php"  method="post" enctype="multipart/form-data">
			<fieldset>
				<div>
					<input type="hidden" name="catid" value="<?php echo $row['id']?>">
					<label class="control-label col-md-4" for="catname">Name:</label>
					<input class="form-control " id="focusedInput" placeholder="Cat name" name="catname" type="text" autofocus="" value="">
				</div>
				
					<input type="submit" value="add">
					
					
	</div>