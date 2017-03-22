<?php
session_start();
include 'dbh.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Brain Games</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="background-color: #f1f1f1;padding: 50px">
<?php
include 'navbar.php';
?>

<?php

$id = $_GET["id"];

$sql="SELECT title,content,releaseDate from articles where id='$id'";

$result = $conn->query($sql);
if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "<h2><b>TITLE:</b>".$row["title"]."</h2><br>";
		echo "<b>Publishing date:</b>".$row["releaseDate"]."<br>";
		echo "<b>Content</b>".$row["content"];
		echo "<br><br><a href=deleteArticle.php?id=".$id.">DELETE ARTICLE</a>";
	}
} else{
	echo "Nothing to show , sorry try again";
}


?>


</body>
</html>
