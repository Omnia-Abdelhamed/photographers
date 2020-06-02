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

<h1 class="text-center">Add photographer</h1>
			<div class="container">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Name
						</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="text" name="name" 
							 autocomplete="off" required="required">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">phone
						</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="text" name="phone" 
							 autocomplete="off" required="required">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">E-mail
						</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="text" name="E-mail" 
							 autocomplete="off" required="required">
						</div>
					</div>
			
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">address</label>
						<div class="col-sm-10 col-md-4">
							<textarea class="form-control" name="address" 
							 required="required"></textarea>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">about</label>
						<div class="col-sm-10 col-md-4">
							<textarea class="form-control" name="about" 
							></textarea>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">City
						</label>
						<div class="col-sm-10 col-md-4">
							<select name="city" class="form-control">
								<?php foreach ($cities as $value) { ?>
									<option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Image</label>
						<div class="col-sm-10 col-md-4">
							<input class="form-control" type="file" name="image" 
							 >
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
