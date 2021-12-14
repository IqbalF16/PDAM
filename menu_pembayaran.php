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
		<form method="get" action="menu_pembayaran.php">
		<div>
			<h1><label>Pembayaran View</h1><label><br>
			<a href="logout.php"><input class="btn" type="button" value="Logout"></a>
		</div>
		<div>
			<a href="main.php"><input type="button" value="Kembali" class="btn"></a>
			<input type="text" name="cari" placeholder="ID Tagihan" class="form">
			<input type="submit" name="cari_tgh" value="Cari" class="btn">
		</div>
		<div>
			<a href="add_tagihan.php"><input type="button" value="Add Data" class="btn"></a>
		</div>
		</form>
		<div align="center">
			<table border="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Tanggal Bayar </th>
						<th>ID Tagihan </th>
						<th>Jumlah Tagihan </th>
						<th>Biaya Denda </th>
						<th>Biaya Admin </th>
						<th>Status </th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php
					$no = 1;
					if(isset($_GET['cari_tgh'])){
						$cari = $_GET['cari'];
						$qry_pby = mysql_query("select * from pembayaran where id_tagihan like '%".$cari."%' order by id asc");
						echo "<a href='menu_pembayaran.php'><input type='button' value='Kembali'></a>";
					} else {
						$qry_pby = mysql_query('SELECT * FROM pembayaran');
					}
					while ($data_pby=mysql_fetch_array($qry_pby)) {
				?>
				<tbody>
					<tr>
						<th><?php echo $no ?></th>
						<th><?php echo $data_pby["tanggal_bayar"];?></th>
						<th><?php echo $data_pby["id_tagihan"];?></th>
						<th><?php echo $data_pby["jumlah_tagihan"];?></th>
						<th><?php echo $data_pby["biaya_denda"];?></th>
						<th><?php echo $data_pby["biaya_admin"];?></th>
						<th><?php echo $data_pby["status"];?></th>
						<th>
							
							<a href="p_delete_pembayaran.php?id=<?php echo $data_pby['id']?>"><input type="button" value="Delete" style="width: 60px;"class="btn"></a>
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