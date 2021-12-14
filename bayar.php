<link href="style.css" rel="stylesheet">
<?php
	error_reporting(0);
	require './conn_db.php';
	
	$id = $_GET['id'];
	
	$qry1 = @mysql_query("SELECT * FROM tagihan WHERE id='$id'");
	$d1 = @mysql_fetch_array($qry1);
	
	$qry2 = @mysql_query("SELECT * FROM pelanggan WHERE id='".$d1["pelanggan_id"]."'");
	$d2 = @mysql_fetch_array($qry2);
	
	$qry3 = @mysql_query("SELECT * FROM tarif WHERE kode='".$d2["kode_tarif"]."'");
	$d3 = @mysql_fetch_array($qry3);
	
	$qry4 = @mysql_query("SELECT * FROM pembayaran WHERE id_tagihan='".$d1["id"]."'");
	$d4 = @mysql_fetch_array($qry4);
	
	$tanggal = date("Y-m-d");
	
	if($tanggal = date("d") >= 20){
		$denda = 10000;
	} else {
		$denda = 0;
	}

	$jumlah_tagihan = ($d1["pemakaian"] * $d3["tarif_perm3"]) + $denda + 5000;
?>
<form action="p_bayar.php?id=<?php echo $id;?>" method="POST" style="margin-top: 70px;" class="login">
	<input type="hidden" name="id" value="<?php echo $d1['id'];?>">
	<div>
		<label>Pelanggan :&nbsp;</label>
		<label><?php echo $d2['nama'];?></label>
	</div>
	<div>
		<label>Pemakaian :&nbsp;</label>
		<label><?php echo $d1['pemakaian'];?></label>
	</div>
	<div>
		<label>Tarif/M3 :&nbsp;</label>
		<label><?php echo $d3['tarif_perm3'];?></label>
	</div>
	<div>
		<label>Biaya Admin :&nbsp;</label>
		<label>5000</label>
	</div>
	<div>
		<label>Biaya Denda :&nbsp;</label>
		<label><?php echo $denda;?></label>
	</div>
	<div>
		<label>Jumlah Bayar :&nbsp;</label>
		<label><?php echo $jumlah_tagihan;?></label>
	</div>
	<div>
		<a href="menu_tagihan.php"><input type="button" style="width: 70px;"class="btn" value="Kembali"></a>
		<a href="p_bayar.php?id=<?php echo $d1['id'];?>"><input type="button" value="Bayar" style="width: 60px;"class="btn"></a>
	</div>
</form>