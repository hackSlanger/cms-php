


<?php
include 'dbh.php';
session_start();

if($_COOKIE["user"]){
 	$name = $_COOKIE["user"];
 } else{
 	header("location: login.php");
 }

$title = $_POST["title"];
$sdesc = $_POST["sdesc"];
$content = $_POST["content"];

$sql = "INSERT INTO articles (title,description,content) VALUES ('$title','$sdesc','$content')";

if($conn->query($sql) === TRUE ){
	echo "article entered successfully";
	header("Location: index.php");
} else{
	echo "failed additon";
}

?>

