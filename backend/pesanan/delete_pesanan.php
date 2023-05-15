<?php

include '../../database/dbkoneksi.php';

$query = "DELETE FROM pesanan WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: tables_pesanan.php");