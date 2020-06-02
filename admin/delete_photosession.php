<?php
include 'connect.php';
if ( ! $_GET['id']) {
	header("location: photo_session.php");
}
$id=$_GET['id'];
$sql="DELETE FROM `photo_session` WHERE id='$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
	header("location: photosession.php");
}