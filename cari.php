<?php
			if (isset($_POST["cari"]))
					{
					$cari = " AND (id_mobil like '%".$_POST["keyword"]."%' or jenis_mobil like '%".$_POST["keyword"]."%' or merk_mobil like '%".$_POST["keyword"]."%' or tahun_mobil like '%".$_POST["keyword"]."%' or harga_mobil like '%".$_POST["keyword"]."%')";
					}
					else {$cari="";}
					
			$query="select mobil.id_mobil, jenis_mobil.jenis_mobil, mobil.merk_mobil, mobil.tahun_mobil, mobil.harga_mobil from jenis_mobil, mobil where jenis_mobil.id_jenis_mobil=mobil.id_jenis_mobil".$cari."";
			$hasil = mysql_query($query,$conn);
			while ($data = mysql_fetch_array($hasil))
			{
			?>