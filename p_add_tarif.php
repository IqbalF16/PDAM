<?php
	error_reporting(0);
	include 'conn_db.php';
	
	$kode = $_POST["kode"];
	$golongan_pelanggan = $_POST["golongan_pelanggan"];
	$tarif_perm3 = $_POST["tarif_perm3"];

		$qry="INSERT INTO tarif SET kode='$kode', golongan_pelanggan='$golongan_pelanggan', tarif_perm3='$tarif_perm3'";
		$insert=mysql_query($qry) or die (mysql_error());
		
		if ($insert) {
			echo "<script>alert('Data Berhasil Di Tambahkan')
			location.replace('menu_tarif.php')</script>";
		} else {
			echo "<script>alert('Data Gagal Di Tambahkan')
			location.replace('add_tarif.php')</script>";
		}
?>