<?php
	include 'dbh.php';
?>

<form method="post" action="enterArticle.html">
	<input type="text" name="title" placeholder="Title"><br>
	<input type="text" name="sdesc" placeholder="Short Description"> <br>
	<textarea type="text" name="content" placeholder="Content" rows="7" cols="23"></textarea><br>
	<input type="submit" name="createArticle">
</form>