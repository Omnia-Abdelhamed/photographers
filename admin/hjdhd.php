<?php

$connect=mysqli_connect("localhost","root","","photographer");
$sql="SELECT * FROM `photographer`";
$result=mysqli_query($connect,$sql);
if ($result) {
	echo "string";
}



