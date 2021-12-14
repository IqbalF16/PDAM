<?php
		require './conn_db.php';
		session_start();
		if (empty($_SESSION['username']))
			{
				echo "<script>alert('Login Dulu')
					location.replace('index.php')</script>";
            }             
?>
<!DOCTYPE html>
<html>
<?php
	error_reporting(0);
	require './conn_db.php';

		$id = $_GET['id'];
		$qry = mysql_query("SELECT * FROM tagihan WHERE id='$id'")or die(mysql_error());
		while($data = mysql_fetch_array($qry)){
?>
<head>
	<title>Add Tagihan | UKK Paket 4</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div><label><h1>Add Data Tagihan</h1></label></div>
	<form method="post" action="p_edit_tagihan.php">
	<input type="hidden" name="id" value="<?php echo $data['id']?>"/>
	<div>
		<label>Tahun & Bulan Tagihan :</label>
		<input class="form" type="month" name="bln_thn" value="<?php echo $data['bln_thn']?>">
	</div>
	<div>
		<label>Pemakaian :</label>
		<input class="form" type="text" name="pemakaian" value="<?php echo $data['pemakaian']?>">
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
            <option value="<?php echo $d_plg["id"];?>"
			<?php
				if($d_plg["id"]==$data["pelanggan_id"])
					{
						echo "selected";
					}
			?>>
			<?php echo $d_plg["nama"];
			}
			?>
		</select>
	</div>
	<div>
		<a href="menu_tagihan.php"><input type="button" class="btn" value="Kembali"></a>
		<input type="submit" class="btn" value="Edit Data">
	</div>
	</form>
</body>
<?php
		}
?>
</html>