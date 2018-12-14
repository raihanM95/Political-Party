<?php
include_once("config.php");

if(isset($_POST["login"])){
	$query = "INSERT INTO login (name, phone, email, password) VALUES ('$_POST[Name]', '$_POST[phone]', '$_POST[Email]', '$_POST[Password]')";

	if(mysqli_query($con, $query)){
		header("Location:login.php");
	}
	else{
		die('Error: ' . mysqli_error());
	}
}
else{
	header("Location:registration.php");
}

mysqli_close($con);
?>