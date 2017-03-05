<?php
 include 'dbh.php';

 $sql = "SELECT title,description,releaseDate from articles";

 $result = $conn->query($sql);

 if($result->num_rows >0){
 	while ($row = $result->fetch_assoc()) {
 		echo "<b>".$row["title"]."</b><br>";
 		echo "<p>".$row["releaseDate"]."</p>";
 		echo "<p>".$row["description"]."</p>";
 	}
 } else {
 	echo "sorry no article is added yet";
 }
?>

<a href="createArticle.php">Create New Article</a>