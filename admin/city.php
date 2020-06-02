<?php
	include 'init.php';
	$sql="SELECT * FROM `cities`";
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
<h1 class="text-center">City</h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>control</th>
					</tr>
					<?php foreach ($data as $value) { ?>

					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['name']; ?></td>
						 
 						<td>
							<a href="edit_city.php" class="btn btn-success"><i class="fa fa-edit"></i>
								Edit
							</a>
							<a href="delete_city.php?id=<?php echo $value['id']; ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								Delete</a>
					
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<a href='add_city.php' class="btn btn-primary">
				<i class="fa fa-plus"> </i> Add city </a>