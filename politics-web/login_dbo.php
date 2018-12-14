<?php
session_start();

include_once("config.php");

if(isset($_POST["SignIn"])){
	$query = "SELECT 'email', 'password' FROM login WHERE email = '$_POST[email]' AND password = '$_POST[website]'";

	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		unset($_SESSION['errorMessage']);
		$_SESSION['email'] = "$_POST[email]";
		header("Location:index_In.php");
	}
	else{
		$_SESSION['errorMessage'] = 1;
		header("Location:login.php");
	}
	mysqli_close($con);
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email']);
	header("Location:login.php");
}
?>