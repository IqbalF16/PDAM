<?php
    include './conn_db.php';
    $id = $_GET['id'];
    $qry =mysql_query("delete from pelanggan where id='$id'");
    header('location:menu_pelanggan.php');
?>