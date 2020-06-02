<?php
	include 'init.php';
?>

<h1 class="text-center">Edit category</h1>
			<div class="container">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">category
						</label>
						<div class="col-sm-10 col-md-4">
							<select name="category" class="form-control">
									<option value="">one</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary btn-lg" type="submit" name="add" 
							value="Save">
						</div>
					</div>
				</form>
			</div>
