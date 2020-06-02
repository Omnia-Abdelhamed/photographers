<?php
include 'connect.php';
if ( ! $_GET['id']) {
	header("location: city.php");
}
$id=$_GET['id'];
$sql="DELETE FROM `cities` WHERE id='$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
	header("location: city.php");
}