<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'penjualan_pulsa';

$koneksi = mysqli_connect($host, $user, $pass, $dbName);

if(!$koneksi) {
    die('Database tidak konek');
} else {
    echo "Database terkoneksi";
}

?>