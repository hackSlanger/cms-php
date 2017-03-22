<?php

include 'dbh.php';
session_start();


if(isset($_COOKIE["user"])){
 	$name = $_COOKIE["user"];
 	header("location: index.php");
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

<body style="background-color: #f2f2f2;">

<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
			<br>
			<div class="panel panel-default">
			  <div class="panel-body">
			  <center><h3>Sign In</h3></center>
			  <br>
			  <form method="POST" action="checkLogin.php">
			    <span>Email</span>

			    <input type="text" name="email" class="form-control">
			    <br>
			    <span>Password</span>

			    <input type="password" name="password" class="form-control">
			    <br>
			    <br>
			    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
			    </form>

			  </div>
			  <div class="panel panel-default" style="margin:18px;">
				<div class="panel-body">
					<small>Not Registered?</small><a class="btn" href="register.php">Register Here</a>
				</div>

			</div>
			</div>

			<br>
			

		</div>
	</div>

</div>

</body>
</html>