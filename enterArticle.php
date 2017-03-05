<?php
$title = $_POST["title"];
$sdesc = $_POST["sdesc"];
$content = $_POST["content"];

$sql = "INSERT INTO php-article (title,description,content) VALUES ('$title','$sdesc','$content')";

if($conn->query($sql) === TRUE ){
	echo "article entered successfully";
	header("Location: index.php");
} else{
	echo "failed additon";
}

?>