<?php 
include 'conn_db.php';

$username = $_POST['username'];
$password = ($_POST['password']);

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0)
	{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	
	echo "<script>alert('Selamat Datang')
   		location.replace('main.php')</script>";
	}
else
	{
	echo "<script>alert('Username dan Password Salah')
   		location.replace('index.php')</script>";
	}
?>

