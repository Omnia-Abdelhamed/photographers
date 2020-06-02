<?php
	include 'init.php';

?>
<style type="text/css">
	body{
		direction: rtl;
	}
</style>
<h1 class="text-center"> Category</h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>ID</th>
						<th>The category</th>
						<th>control</th>
					</tr>
				
					<tr>
						<td></td>
						<td></td>
						<td>
							<a href="edit_category.php" class="btn btn-success"><i class="fa fa-edit"></i>
								Edit
							</a>
							<a href="#" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								Delete</a>
					
						</td>
					</tr>
				</table>
			</div>
			<a href='add_category.php' class="btn btn-primary">
				<i class="fa fa-plus"> </i> Add category </a>