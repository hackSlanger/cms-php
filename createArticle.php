<?php
	session_start();
	include 'dbh.php';

	if($_COOKIE["user"]){
 	$name = $_COOKIE["user"];
 } else{
 	header("location: login.php");
 }
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
 <h3>Enter New Brain Game</h3>



<form method="post" action="enterArticle.php">
	<input type="text" name="title" placeholder="Title" class="form-control"><br>
	<input type="text" name="sdesc" placeholder="Short Description" class="form-control"> <br>
	<textarea type="text" name="content" placeholder="Content" rows="7" cols="23" class="form-control"></textarea><br>
	<input type="submit" name="createArticle" class="btn btn-primary">
</form>


</body>
</html>