<?php
	include 'init.php';
	$sql="SELECT * FROM `photo_session`";
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
<h1 class="text-center">Photosession</h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>ID</th>
						<th>title</th>
						<th>Address</th>
						<th>Image</th>
						<th>control</th>
					</tr>
				<?php foreach ($data as $value) { ?>
						<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['title']; ?></td>
						<td><?php echo $value['address']; ?></td>
						<td><img style="width: 90px;height: 90px" src="..\upload\<?php echo $value['image']; ?>"></td>
 						<td>
							
							<a href="delete_photosession.php?id=<?php echo $value['id']; ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								Delete</a>
					
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<a href='add_photosession.php' class="btn btn-primary">
				<i class="fa fa-plus"> </i> Add photosession </a>