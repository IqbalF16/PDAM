<!DOCTYPE html>
<html>
<?php
	error_reporting(0);
	require './conn_db.php';
	$id = $_GET['id'];
	$qry_plg = mysql_query("select * from pelanggan where id='$id'");
	while($d_plg =  mysql_fetch_array($qry_plg))
		{
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
	<title>Edit Pelanggan</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div><label><h1>Edit Data Pelanggan | PDAM</h1></label></div>
	<form method="post" action="p_edit_pelanggan.php">
	<input type="hidden" name="id" value="<?php echo $d_plg['id'] ?>"/>
	<div>
		<label>Nama :</label>
		<input class="form" type="text" name="nama" value="<?php echo $d_plg['nama'] ?>">
	</div>
	<div>
		<label>Alamat :</label>
		<input class="form" type="text" name="alamat" value="<?php echo $d_plg['alamat'] ?>">
	</div>
	<div>
		<label>Golongan Pelanggan :</label>
		<select class="form" name="kode_tarif">
			<option style="display:none;" value="">Pilih
			<?php
				$qry_trf= @mysql_query("select * from tarif");
				while ($d_trf = @mysql_fetch_array($qry_trf))
					{
			?>
			<option value="<?php echo $d_trf["kode"];?>"
			<?php
				if($d_trf["kode"]==$d_plg["kode_tarif"])
					{
						echo "selected";
					}
			?>>
			<?php echo $d_trf["golongan_pelanggan"];?>
			<?php
					}
			?>
		</select>
	</div>
	<div>
		<a href="menu_pelanggan.php"><input type="button" class="btn" value="Kembali"></a>
		<input type="submit" value="Edit Data" class="btn">
	</div>
	</form>
</body>
<?php
		}
?>
</html>