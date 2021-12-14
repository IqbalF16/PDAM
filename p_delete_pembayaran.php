<?php
    include './conn_db.php';
    $id = $_GET['id'];
    $qry =mysql_query("delete from pembayaran where id='$id'");
    header('location:menu_pembayaran.php');
?>