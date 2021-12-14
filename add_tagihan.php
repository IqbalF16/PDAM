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
	<title>Add Tagihan | PDAM</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div><label><h1>Add Data Tagihan</h1></label></div>
	<form method="post" action="p_add_tagihan.php">
	<div>
		<label>Bulan & Tahun :</label>
		<input class="form" type="month" name="bln_thn" min="2018-11" value="2018-11">
	</div>
	<div>
		<label>Pemakaian per M3 :</label>
		<input class="form" type="text" name="pemakaian">
	</div>
	<div>
		<label for="disabledSelect">Status :</label>
             <input class="form" id="disabledInput" value="Belum Bayar" disabled="" type="text" name="status">
		</div>
	<div>
		<label>Nama Pelanggan :</label>
		<select name="pelanggan_id" class="form">
			<option style="display:none;" value="">Pilih
			<?php
			$qry_plg= @mysql_query("select * from pelanggan");
			while ($d_plg = @mysql_fetch_array($qry_plg))
			{
			?>
            <option value="<?php echo $d_plg["id"];?>"><?php echo $d_plg["nama"];?>
			<?php
			}
			?>
		</select>
	</div>
	<div>
		<a href="menu_tagihan.php"><input type="button" class="btn" value="Kembali"></a>
		<input type="submit" value="Add Data" class="btn" name="add_tgh">
	</div>
	</form>
</body>
</html>