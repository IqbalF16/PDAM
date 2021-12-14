<?php
	error_reporting(0);
	require './conn_db.php';
	
	$id = $_POST['id'];
	
	$qry1 = @mysql_query("SELECT * FROM tagihan WHERE id='".$_GET['id']."'");
	$d1 = @mysql_fetch_array($qry1);
	
	$qry2 = @mysql_query("SELECT * FROM pelanggan WHERE id='".$d1['pelanggan_id']."'");
	$d2 = @mysql_fetch_array($qry2);
	
	$qry3 = @mysql_query("SELECT * FROM tarif WHERE kode='".$d2['kode_tarif']."'");
	$d3 = @mysql_fetch_array($qry3);
	
	$qry4 = @mysql_query("SELECT * FROM pembayaran WHERE id_tagihan='".$d1['id']."'");
	$d4 = @mysql_fetch_array($qry4);
	
	$tanggal1 = date("Y-m-d");
	$tanggal = date("Y-m-d");
	
	if($tanggal = date("d") >= 20){
		$denda = 10000;
	} else {
		$denda = 0;
	}
	
	$jumlah_tagihan = ($d1["pemakaian"] * $d3["tarif_perm3"]) + $denda + 5000;
	
	$qry_insert = "INSERT INTO pembayaran (tanggal_bayar,id_tagihan,jumlah_tagihan,biaya_denda,biaya_admin,status) values ('$tanggal1','".$d1['id']."','$jumlah_tagihan','$denda','5000','Lunas')";
	$insert = mysql_query ($qry_insert) or die (mysql_error());
	
	header("Location:menu_pembayaran.php");
?>