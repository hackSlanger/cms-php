<?php

include 'dbh.php';
session_start();

$id = $_GET["id"];
$sql = "DELETE FROM articles WHERE id='$id'";
if($conn->query($sql)){
	header("location: index.php");
} else{
	echo "deletion failed";
}

?>