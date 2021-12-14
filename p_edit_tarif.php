<?php 
include 'conn_db.php';
$id = $_POST['id'];
$kode = $_POST['kode'];
$golongan_pelanggan = $_POST['golongan_pelanggan'];
$tarif_perm3 = $_POST['tarif_perm3'];

$update="UPDATE tarif SET kode='$kode', golongan_pelanggan='$golongan_pelanggan', tarif_perm3='$tarif_perm3' WHERE id='$id'";
$sql_update = mysql_query($update);
	if ($sql_update){
		echo "<script>alert('Data Berhasil Di Edit')
		location.replace('menu_tarif.php')</script>";
	} else {
		echo "<script>alert('Data Gagal Di Edit')
		location.replace('edit_tarif.php')</script>";
	}
?>