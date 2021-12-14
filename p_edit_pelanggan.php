<?php 
include 'conn_db.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kode_tarif = $_POST['kode_tarif'];

$update="UPDATE pelanggan SET nama='$nama', alamat='$alamat', kode_tarif='$kode_tarif' WHERE id='$id'";
$sql_update = mysql_query($update);
	if ($sql_update){
		echo "<script>alert('Data Berhasil Di Edit')
		location.replace('menu_pelanggan.php')</script>";
	} else {
		echo "<script>alert('Data Gagal Di Edit')
		location.replace('edit_pelanggan.php')</script>";
	}
?>