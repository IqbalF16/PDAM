<?php
		session_start();
		if (empty($_SESSION['username']))
			{
				echo "<script>alert('Login Dulu')
					location.replace('index.php')</script>";
            }             
?>
<html>
	<head>
		<title>Main Menu | PDAM</title>
		<link href="style.css" rel="stylesheet">
	</head>
<body>
	<div>
		<h1><label>Main Menu</label></h1>
		<a href="logout.php"><input class="btn" type="button" value="Logout"></a>
	</div>
	<div align="center">
		<a href="menu_tarif.php"><input class="btn" type="button" value="Menu Tarif"></a>
		<a href="menu_pelanggan.php"><input class="btn" type="button" value="Menu Pelanggan"></a>
		<a href="menu_tagihan.php"><input class="btn" type="button" value="Menu Tagihan"></a>
		<a href="menu_pembayaran.php"><input class="btn" type="button" value="Menu Pembayaran"></a>
	</div>
</body>
</html>