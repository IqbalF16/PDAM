<?php
	include './conn_db.php';
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	mysql_query("INSERT INTO user (name,username,password) values('$name','$username','$password')");

		header('location:index.php');
?>