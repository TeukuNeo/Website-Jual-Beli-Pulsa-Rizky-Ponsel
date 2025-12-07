<?php

include 'db/koneksi.php';

$id = $_GET['id'];
$sqlQuery = "DELETE FROM products WHERE id = $id";
mysqli_query($koneksi, $sqlQuery);
header('location:admin.php');

?>