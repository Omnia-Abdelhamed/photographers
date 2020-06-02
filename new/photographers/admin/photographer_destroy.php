<?php
include 'connect.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}else{
	$id=0;
}

$sql="UPDATE `photographer` SET `active`=0 WHERE id='$id'";
$result=mysqli_query($connect,$sql);
if ($result) {
	header("location: photographer.php");
}