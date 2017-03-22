<?php

include 'dbh.php';
session_start();


$email=$_POST["email"];
$password = $_POST["password"];

$sql = "SELECT id,name,password from users where email='$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		if($row["password"] === $password){
			setcookie("user",$row["name"],time() + (86400 * 30), "/");
			header("location: index.php");
		} else{
			echo "incorrect credentials";
		}
	}
}

?>