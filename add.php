<?php
	session_start();
	include "con.php";
	
	$name = $_SESSION['name'];
	$user = $_SESSION['user'];
	$comment = $_POST['msg'];
	
		$con->query("INSERT INTO chat (name , username , comment) VALUES ('$name' , '$user' , '$comment')");
		$con->close();
?>
