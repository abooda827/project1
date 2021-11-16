
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<form action="function/blog_add.php"  method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="form-group">
					<label class="control-label col-md-4" for="bloghead">The Blog Header:</label>
					<input class="form-control " id="focusedInput" placeholder="blog header" name="bloghead" type="text" autofocus="" value="">
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="blogdet">The Blog Details:</label>
					<textarea class="form-control " id="focusedInput" placeholder="blogdetails" name="blogdet" type="text" value=""></textarea>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="cat">Category:</label>
					<input class="form-control " id="focusedInput" placeholder="category" name="cat" type="text" value="">
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="img">Img:</label>
					<input class="form-control " id="focusedInput" name="img" type="file" value="">
				</div>

					<input class="btn btn-success" type="submit" value="ADD Blog">
					
					
	</div>