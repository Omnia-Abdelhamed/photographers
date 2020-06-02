<?php
	include 'init.php';
	$select_city_sql="SELECT * FROM cities";
	$select_city_result=mysqli_query($connect,$select_city_sql);
	$cities=array();
	while($city_row=mysqli_fetch_assoc($select_city_result)){
		$cities[]=$city_row;
	}

	if (isset($_POST['name'])) {
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['E-mail'];
		$address=$_POST['address'];
		$about=$_POST['about'];
		$city_id=$_POST['city'];
		if (!empty($name) & !empty($phone) & !empty($address) & !empty($city_id) ) {
				$sql="INSERT INTO `photographer`(`name`, `address`, `phone`, `email`, `about`,`city_id`) VALUES ('$name','$address','$phone','$email','$about','$city_id')";
				$result=mysqli_query($connect,$sql);
		}
	

	}

?>

<h1 class="text-center">Add photosession</h1>
			<div class="container">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">title
						</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="text" name="title" 
							 autocomplete="off" required="required">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">address
						</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="text" address="phone" 
							 autocomplete="off" required="required">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">about</label>
						<div class="col-sm-10 col-md-4">
							<textarea class="form-control" name="about" 
							 required="required"></textarea>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Image</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="file" name="image" 
							 required="required">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">video</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="file" name="video" 
							 required="required">
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
