<html>
<?php
		require './conn_db.php';
		session_start();
		if (empty($_SESSION['username']))
			{
				echo "<script>alert('Login Dulu')
					location.replace('index.php')</script>";
            }             
?>
<head>
	<title>Menu Tarif | PDAM</title>
	<link href="style.css" rel="stylesheet">
</head>	
<body>
	<div>
		<br>
		<form method="get" action="menu_tarif.php">
		<div>
			<h1><label>Tarif View</label></h1>
			<a href="logout.php"><input class="btn" type="button" value="Logout"></a>
			<br>
		</div>
		<div>
			<a href="main.php"><input type="button" value="Kembali" class="btn"></a>
			<input type="text" name="cari" placeholder="Golongan Pelanggan..." class="form">
			<input type="submit" name="cari_trf" value="Cari" class="btn" >
		</div>
		<div>
			<a href="add_tarif.php"><input type="button" value="Add Data" class="btn"></a>
		</div>
		</form>
		<div align="center">
			<table border="0">
				<thead>
					<tr>
						<th>#</th>
						<!-- <th>Id Tarif</th> -->
						<th>Kode Tarif</th>
						<th>Golongan</th>
						<th>Tarif / m3</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$no = 1;
					if(isset($_GET['cari_trf'])){
						$cari = $_GET['cari'];
						$qry_trf = mysql_query("select * FROM tarif WHERE golongan_pelanggan like '%".$cari."%' order by id asc");
						echo "<a href='menu_tarif.php'><input type='button' value='Kembali'></a>";
					} else {
						$qry_trf = mysql_query("select * FROM tarif");
					}
					while ($data_trf = mysql_fetch_array($qry_trf)) {
				?>
				<tbody>
					<tr>
						<th><?php echo $no ?></th>
						<!-- <th><?php echo $data_trf['id']?></th> -->
						<th><?php echo $data_trf['kode']?></th>
						<th><?php echo $data_trf['golongan_pelanggan']?></th>
						<th><?php echo $data_trf['tarif_perm3']?></th>
						<th><a href="edit_tarif.php?id=<?php echo $data_trf['id']?>"><input type="button" value="Edit" style="width: 50px;"class="btn"></a>
							<a href="p_delete_tarif.php?id=<?php echo $data_trf['id']?>"><input type="button" value="Delete" style="width: 60px;"class="btn"></a></th>
					</tr>
				</tbody>
				<?php
					$no++;
					}
				?>
			</table>
		</div>
	</div>
</body>
</html>