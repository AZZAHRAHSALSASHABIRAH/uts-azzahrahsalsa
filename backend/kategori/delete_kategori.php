<?php

include '../../database/dbkoneksi.php';

$query = "DELETE FROM kategori_produk WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: tables_kategori_produk.php");