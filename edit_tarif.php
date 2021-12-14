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
<head>
	<title>Edit Data Tarif | PDAM</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<?php 	
		include "conn_db.php";
		$id = $_GET['id'];
		$qry = mysql_query("SELECT * FROM tarif WHERE id='$id'")or die(mysql_error());
		while($data = mysql_fetch_array($qry)){
	?>
	<div><label><h1>Edit Data Tarif</h1></label></div>
	<form method="post" action="p_edit_tarif.php">
	<input type="hidden" name="id" value="<?php echo $data['id']?>">
	<div>
		<label>Kode </label>
		<input type="text" name="kode" class="form" value="<?php echo $data['kode']?>">
	</div>
	<div>
		<label>Golongan Pelanggan</label>
		<input type="text" name="golongan_pelanggan" class="form" value="<?php echo $data['golongan_pelanggan']?>">
	</div>
	<div>
		<label>Tarif Per M³</label>
		<input type="text" name="tarif_perm3" class="form" value="<?php echo $data['tarif_perm3']?>">
	</div>
	<div>
		<a href="menu_tarif.php"><input type="button" class="btn" value="Kembali"></a>
		<input type="submit" class="btn" value="Edit Data">
	</div>
	</form>
	<?php
		}
	?>
</body>
</html>