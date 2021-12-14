<?php
	error_reporting(0);
	include './conn_db.php';

	$bln_thn = $_POST['bln_thn'];
	$pemakaian = $_POST['pemakaian'];
	$status = $_POST['status'];
	$pelanggan_id = $_POST['pelanggan_id'];

	$qry="INSERT INTO tagihan SET bln_thn='$bln_thn',pemakaian='$pemakaian',status='Belum Bayar',pelanggan_id='$pelanggan_id'";
	$insert=mysql_query($qry) or die (mysql_error());
	if ($insert) {
			echo "<script>alert('Data Berhasil Di Tambahkan')
			location.replace('menu_tagihan.php')</script>";
		} else {
			echo "<script>alert('Data Gagal Di Tambahkan')
			location.replace('add_tagihan.php')</script>";
		}
?>