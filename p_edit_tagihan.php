<?php 
include 'conn_db.php';
$id = $_POST['id'];
$bln_thn = $_POST['bln_thn'];
$pemakaian = $_POST['pemakaian'];
$status = $_POST['status'];
$pelanggan_id = $_POST['pelanggan_id'];

$update="UPDATE tagihan SET bln_thn='$bln_thn', pemakaian='$pemakaian', status='Belum Bayar', pelanggan_id='$pelanggan_id' WHERE id='$id'";
$sql_update = mysql_query($update);
	if ($sql_update){
		echo "<script>alert('Data Berhasil Di Edit')
		location.replace('menu_tagihan.php')</script>";
	} else {
		echo "<script>alert('Data Gagal Di Edit')
		location.replace('edit_tagihan.php')</script>";
	}
?>