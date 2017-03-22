<?php
session_start();
include 'dbh.php';


$id = $_GET["id"];
$sql = "DELETE FROM articles WHERE id='$id'";
if($conn->query($sql)){
	header("location: index.php");
} else{
	echo "deletion failed";
}

?>