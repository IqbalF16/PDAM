<?php
	error_reporting(0);
	include 'conn_db.php';
	
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$kode_tarif = $_POST["kode_tarif"];

		$qry="INSERT INTO pelanggan SET nama='$nama', alamat='$alamat', kode_tarif='$kode_tarif'";
		$insert=mysql_query($qry) or die (mysql_error());
		
		if ($insert) {
			echo "<script>alert('Data Berhasil Di Tambahkan')
			location.replace('menu_pelanggan.php')</script>";
		} else {
			echo "<script>alert('Data Gagal Di Tambahkan')
			location.replace('add_pelanggan.php')</script>";
		}
?>