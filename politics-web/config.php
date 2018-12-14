<?php
$server = "localhost";
$dbname = "political_party";
$dbuser = "root";
$dbpass = "";

$con = mysqli_connect($server, $dbuser, $dbpass, $dbname);
if (!$con){
	die('Could not connect: ' . mysqli_error());
}
?>