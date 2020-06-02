<?php 

	session_start();
	if(isset($_SESSION['username'])){
		header("location: photographer.php");
	}

	$noNavbar='';
	include 'init.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$hashedpass=sha1($password);
		$sql="SELECT * FROM admin WHERE username='$username' AND password='$hashedpass'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		if($count>0){
			$_SESSION['username']=$username;
			$_SESSION['id']=$row['id'];
			header("location: photographer.php");
			exit();
		}
	} 

?>

	<form class="login" method="post">
		<h4 class="text-center">LOGIN PHOTOGRAPHER</h4>
		<HR>
		<input class="form-control" type="text" name="username" 
		placeholder="Username" autocomplete="off">
		<input class="form-control" type="password" name="password" 
		placeholder="Password" autocomplete="new-password">
		<input class="btn btn-primary btn-block" type="submit" name="submit" value="Login">
	</form>