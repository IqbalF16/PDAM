<!DOCTYPE html>
<?php
		require './conn_db.php';
		session_start();
		if (empty($_SESSION['username']))
			{
				echo "<script>alert('Login Dulu')
					location.replace('index.php')</script>";
            }             
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> Pembayaran </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: dimgus07@gmail.com </strong>
                    &nbsp;&nbsp;
                    <strong>Support: +62 852-3694-4606 </strong>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="main.php"> Dashboard </a></li>
                            <li><a href="menu_pelanggan.php">Pelanggan</a></li>
                            <li><a href="menu_tarif.php">Tarif</a></li>
							<li><a href="menu_tagihan.php">Tagihan</a></li>
                            <li><a href="menu_pembayaran.php">Pembayaran</a></li>
                            <li><a href="logout.php"> Log out </a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
          <table align="left">

		<td>          

	<?php 
		if(isset($_GET['pesan']))
		{
		$pesan = $_GET['pesan'];
		if($pesan == "input")
		{
		echo "<div style='margin-bottom:-55px' class='alert alert-success fade in' role='alert'>Data berhasil di Input!</div>";
		}
		else if($pesan == "hapus")
		{
		echo "<div style='margin-bottom:-55px' class='alert alert-success fade in' role='alert'>Data berhasil di Dihapus!</div>";
		}
	}

	?>
</td>
</table>
<br>
</br>




        <form action="tagihan.php" method="get">
		<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" ><button type="submit" class="btn btn-primary btn-xs ti-search"></button>  </span>   	
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">
		</div>
	</form>
	<br>
	<br>


		<td>
	<?php 
	if(isset($_GET['cari']))
	{

	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";

	}

	?>	

	<table class='table table-hover'>
				<tr align="center">
					<th >No.</th>
					<th >Tanggal Bayar </th>
					<th >Tagihan </th>
					<th >Jumlah Tagihan </th>
					<th >Biaya Denda </th>
					<th >Biaya Admin </th>
					<th >Status </th>
					<th >Action </th>

				</tr>
				<?php
			
					if ((isset($_GET["cari"]))<>"")
						
					{

					$cari = $_GET['cari'];
					$q = @mysql_query("select * from pelanggan where nama like '%".$cari."%'");

					}

					else
					{

					$q = mysql_query("SELECT tg.id AS id,tg.tahunTagih, tg.bulanTagih, tg.pemakaian, tg.status, pl.nama FROM pelanggan pl, tagihan tg WHERE tg.id=pl.nama");
					
					}
					$no= 1;
					while ($view = @mysql_fetch_array($q))
					{
					?>
					
				<tr align="center">
					<th ><?php echo $no++; ?></th>
					<th ><?php echo $view["tahunTagih"];?></th>
					<th ><?php echo $view["bulanTagih"];?></th>
					<th ><?php echo $view["pemakaian"];?></th>
					<th ><?php echo $view["status"];?></th>
					<th ><?php echo $view["nama"];?></th>
					<th>
						<a href="print.php?id=<?php echo $data_tgh['id']?>"><input type="button" value="Bayar" style="width: 60px;"class="btn"></a>&nbsp;
						<a href="p_delete_pembayaran.php?id=<?php echo $data_tgh['id']?>"><input type="button" value="Delete" style="width: 60px;"class="btn"></a>
					</th>
				</tr>

				<?php
					}
				?> 
			</table>
		</td>
	</div>
</div>

</body>
</html>


   
   