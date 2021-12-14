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
	<title>Add Pelanggan | PDAM</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div><label><h1>Add Data Pelanggan</h1></label></div>
	<form method="post" action="p_add_pelanggan.php">
	<div>
		<label>Nama :</label>
		<input class="form" type="text" name="nama">
	</div>
	<div>
		<label>Alamat :</label>
		<input class="form" type="text" name="alamat">
	</div>
	<div>
		<label>Golongan :</label>
		<select class="form" type="text" name="golongan_pelanggan">
				<option style="display:none;" value="">Pilihlah..</option>
				<?php
				$tampil=mysql_query("select * from tarif");
				while($w=mysql_fetch_array($tampil))
				{
				?>
				<option value="<?php echo $w["kode"];?>">Golongan Pelanggan&nbsp;:&nbsp;<?php echo $w["golongan_pelanggan"];?>
				<?php
				}
				?>
		</select>
	</div>
	<div>
		<a href="menu_pelanggan.php"><input type="button" class="btn" value="Kembali"></a>
		<input type="submit" value="Add Data" class="btn">
	</div>
	</form>
</body>
</html>