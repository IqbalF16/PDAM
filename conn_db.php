<?php
    $myhost = "localhost";
    $myuser = "root";
    $mypass = "";
    $myDbs = "pdam";
    
    $koneksiDb = mysql_connect($myhost, $myuser, $mypass);
    
    if(!$koneksiDb){
        echo "Koneksi Gagal";
    }
    
    mysql_select_db($myDbs) or die ("Database Tidak Dapat Ditemukan !");
?>
