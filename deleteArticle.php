<?php

include 'dbh.php';
session_start();

if($_COOKIE["user"]){
 	$name = $_COOKIE["user"];
 } else{
 	header("location: login.php");
 }

$id = $_GET["id"];
$sql = "DELETE FROM articles WHERE id='$id'";
if($conn->query($sql)){
	header("location: index.php");
} else{
	echo "deletion failed";
}

?>