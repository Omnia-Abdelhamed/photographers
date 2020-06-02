<?php
include 'connect.php';
if ( ! $_GET['id']) {
	header("location: photographer.php");
}
$id=$_GET['id'];
$sql="DELETE FROM `photographer` WHERE id='$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
	header("location: photographer.php");
}