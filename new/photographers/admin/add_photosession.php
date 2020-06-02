<?php
	include 'init.php';
	
	if (isset($_POST['title'])) {
		$title=$_POST['title'];
		$address=$_POST['address'];
		$image = $_FILES['image'];
	    $image_name=$image['name'];
	    $image_type=$image['type'];
	    $image_temp=$image['tmp_name'];
	    $image_size=$image['size'];
	    $allowed_extensions=array("jpeg","jpg","png");
	    $image_extension=explode('.', $image_name);
	    $image_extension=strtolower(end($image_extension));
	    if(in_array($image_extension, $allowed_extensions)){
	        $image_name=rand(0,100000).'_'.$image_name;
	        move_uploaded_file($image_temp, "..\upload\\".$image_name);
	    }

	    if (!empty($title) && !empty($address) && !empty($image_name)){
	    	$sql = "INSERT INTO photo_session (title,address,image) VALUES ('$title' ,'$address','$image_name')";
	        $result = mysqli_query($connect, $sql);
	        if ($result) {
	            header("location: photosession.php");
	        }
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
							<input class="form-control" type="text" name="address" 
							 autocomplete="off" required="required">
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
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary btn-lg" type="submit" name="add" 
							value="Save">
						</div>
					</div>
				</form>
			</div>
