<!DOCTYPE html>
<html>
<?php
	error_reporting(0);
	require './conn_db.php';
?>
<?php
		session_start();
		if (empty($_SESSION['username']))
			{
				echo "<script>alert('Login Dulu')
					location.replace('index.php')</script>";
            }             
?>
<head>
	<title>Add Tarif | PDAM</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div><label><h1>Add Data Tarif</h1></label></div>
	<form method="post" action="p_add_tarif.php">
	<div>
		<label>Kode :</label>
		<input class="form" type="text" name="kode">
	</div>
	<div>
		<label>Golongan :</label>
		<input class="form" type="text" name="golongan_pelanggan">
	</div>
	<div>
		<label>Tarif / m3</label>
		<input class="form" type="text" name="tarif_perm3">
	</div>
	<div>
		<a href="menu_tarif.php"><input type="button" class="btn" value="Kembali"></a>
		<input type="submit" value="Add Data" class="btn" name="add_tgh">
	</div>
	</form>
</body>
</html>