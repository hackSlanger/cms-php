<?php

include 'dbh.php';
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];


if($password === $c_password){
	$sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
	$conn->query($sql) or die("FATAL ERROR OCCURED");
	echo "User details entered in database";
	setcookie("user",$name,time() + (86400 * 30), "/");
	header("location: index.php");
}

?>