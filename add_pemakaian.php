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
	<title>Add Pemakaian</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div><label><h1>Add Data Pemakaian</h1></label></div>
	<form method="post" action="p_add_pemakaian.php">
	<div>
		<label>Golongan Pelanggan :</label>
		<select name="golongan_pelanggan">Silahkan Pilih
				<?php
				$tampil=mysql_query("select * from golongan");
				while($w=mysql_fetch_array($tampil))
				{
					echo"<option value=$w[kode_tarif] > $w[golongan_pelanggan]</option>";
				}
				?>
		</select>
	</div>
	</div>
	<div>
		<label>Pemakaian Progresif/m3</label>
		<select class="form" name="pemakaian">
			<option style="display:none;" value="">Pilih</option>
			<option value="0-10"></option>
		</select> >
	</div>
	<div>
		<label>Daya :</label>
		<select class="form" name="kode_tarif">
			<option style="display:none;" value="">Pilih
			<?php
			$qry_trf= @mysql_query("select * from tarif");
			while ($d_trf = @mysql_fetch_array($qry_trf))
			{
			?>
			<option value="<?php echo $d_trf["kode"];?>">Daya&nbsp;:&nbsp;<?php echo $d_trf["daya"];?>
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