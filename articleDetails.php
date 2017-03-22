<?php

include 'dbh.php';
session_start();

$id = $_GET["id"];

$sql="SELECT title,content,releaseDate from articles where id='$id'";

$result = $conn->query($sql);
if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "<b>TITLE:</b>".$row["title"]."<br>";
		echo "<b>Publishing date:</b>".$row["releaseDate"]."<br>";
		echo "<b>Content</b>".$row["content"];
		echo "<br><br><a href=deleteArticle.php?id=".$id.">DELETE ARTICLE</a>";
	}
} else{
	echo "Nothing to show , sorry try again";
}