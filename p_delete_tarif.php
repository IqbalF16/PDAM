<?php
    include './conn_db.php';
    $id = $_GET['id'];
    $qry =mysql_query("delete from tarif where id='$id'");
    header('location:menu_tarif.php');
?>