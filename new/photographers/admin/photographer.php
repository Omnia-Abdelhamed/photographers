<?php
	include 'init.php';
	$sql="SELECT * FROM `photographer`";
	$result=mysqli_query($connect,$sql);

	$data= array();

	while ($row=mysqli_fetch_assoc($result)) {
		$data[]=$row;
	}
?>




<style type="text/css">
	body{
		direction: rtl;
	}
</style>
<h1 class="text-center">Photographer</h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
						<th>Phone</th>
						<th>E_mail</th>
						<th>Image</th>
						<th>City</th>
						<th>control</th>
					</tr>
				<?php foreach ($data as $value) { 
					$city_id=$value['city_id'];
					$city_sql="SELECT * FROM cities WHERE id='$city_id'";
					$city_result=mysqli_query($connect,$city_sql);
					$city_row=mysqli_fetch_assoc($city_result);
				?>
				 	<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['address']; ?></td>
						<td><?php echo $value['phone']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td><img style="width: 80px;height: 80px;" src="../images/<?php echo $value['image']; ?>"></td>
						<td><?php echo $city_row['name']; ?></td>
						<td>
							<?php if($value['active']==0){ ?>
							<a href="photographer_active.php?id=<?php echo $value['id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i>
								active
							</a>
							<?php }else{ ?>
								<a href="photographer_destroy.php?id=<?php echo $value['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i>
								deactive
							</a>
							<?php } ?>
							<a href="delete_photographer.php?id=<?php echo $value['id']; ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								Delete</a>
					
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
		<!-- 	<a href='add_photographer.php' class="btn btn-primary">
				<i class="fa fa-plus"> </i> Add photographer </a> -->