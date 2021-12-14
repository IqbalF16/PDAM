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
	<title>Menu Pelanggan | UUK Paket 4</title>
	<link href="style.css" rel="stylesheet">
</head>	
<body>
	<div>
		<br>
		<form method="get" action="menu_tagihan.php">
		<div>
			<h1><label>Tagihan View</h1><label><br>
			<a href="logout.php"><input class="btn" type="button" value="Logout"></a>
		</div>
		<div>
			<a href="main.php"><input type="button" value="Kembali" class="btn"></a>
			<input type="text" name="cari" placeholder="Tahun" class="form">
			<input type="submit" name="cari_tgh" value="Cari" class="btn">
		</div>
		<div>
			<a href="add_tagihan.php"><input type="button" value="Add Data" class="btn"></a>
			<a href="index.php"><input type="button" value="Home" class="btn"></a>
		</div>
		</form>
		<div align="right">
			<table border="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Tagihan Tahun & Bulan</th>
						<th>Nama</th>
						<th>Pemakaian</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php
					$no = 1;
					if(isset($_GET['cari_tgh'])){
						$cari = $_GET['cari'];
						$qry_tgh = mysql_query("SELECT t.id, t.bln_thn as bln_thn, t.status, t.pemakaian, p.nama as nama FROM pelanggan p, tagihan t WHERE p.id=t.pelanggan_id AND p.nama like '%".$cari."%' order by id asc");
						echo "<a href='menu_tagihan.php'><input type='button' value='Kembali'></a>";
					} else {
						$qry_tgh = mysql_query("SELECT t.id, t.bln_thn as bln_thn, t.status, t.pemakaian, p.nama as nama FROM pelanggan p, tagihan t WHERE p.id=t.pelanggan_id");
					}
					while ($data_tgh=mysql_fetch_array($qry_tgh)) {
				?>
				<tbody>
					<tr>
						<th><?php echo $no ?></th>
						<th><?php echo $data_tgh['bln_thn']?></th>
						<th><?php echo $data_tgh['nama']?></th>
						<th><?php echo $data_tgh['pemakaian']?></th>
						<th><?php echo $data_tgh['status']?></th>
						<th>
							<a href="bayar.php?id=<?php echo $data_tgh['id']?>"><input type="button" value="Bayar" style="width: 60px;"class="btn"></a>&nbsp;
							<a href="edit_tagihan.php?id=<?php echo $data_tgh['id']?>"><input type="button" value="Edit" style="width: 50px;"class="btn"></a>&nbsp;
							<a href="p_delete_tagihan.php?id=<?php echo $data_tgh['id']?>"><input type="button" value="Delete" style="width: 60px;"class="btn"></a>
						</th>
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