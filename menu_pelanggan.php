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
	<title>Menu Pelanggan | PDAM</title>
	<link href="style.css" rel="stylesheet">
</head>	
<body>
	<div>
		<br>
		<form method="get" action="menu_pelanggan.php">
		<div>
			<h1><label>Pelanggan View</label></h1>
			<a href="logout.php"><input class="btn" type="button" value="Logout"></a>
			<br>
		</div>
		<div>
			<a href="main.php"><input type="button" value="Kembali" class="btn"></a>
			<input type="text" name="cari" placeholder="Nama.." class="form">
			<input type="submit" name="cari_org" value="Cari" class="btn">
		</div>
		<div>
			<a href="add_pelanggan.php"><input type="button" value="Add Data" class="btn"></a>
		</div>
		</form>
		<div align="center">
			<table border="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Kode Tarif</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php
					$no = 1;
					if(isset($_GET['cari_org'])){
						$cari = $_GET['cari'];
						$qry_org = mysql_query("select * FROM pelanggan WHERE nama like '%".$cari."%' order by id asc");
						echo "<a href='menu_pelanggan.php'><input type='button' value='Kembali'></a>";
					} else {
						$qry_org = mysql_query("select * FROM pelanggan order by id asc");
					}
					while ($data_org=mysql_fetch_array($qry_org)) {
				?>
				<tbody>
					<tr>
						<th><?php echo $no ?></td>
						<th><?php echo $data_org['nama']?></th>
						<th><?php echo $data_org['alamat']?></th>
						<th><?php echo $data_org['kode_tarif']?></th>
						<th><a href="edit_pelanggan.php?id=<?php echo $data_org['id']?>"><input type="button" value="Edit" style="width: 50px;"class="btn"></a>
							<a href="p_delete_pelanggan.php?id=<?php echo $data_org['id']?>"><input type="button" value="Delete" style="width: 60px;"class="btn"></a></th>
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