<?php

include 'db/koneksi.php';

function upload()
{
    if (!isset($_FILES['gambar'])) {
        return false;
    }
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $ekstensiGambarValid = ['jpg','png','jpeg'];
    $ekstensiGambar = explode('.',$fileName);
    $ekstensiGambar = strToLower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
         echo "
          <script>
           alert('yang kamu upload bukan gambar!')
         </script>
        ";
        return false;
    }

    if ($fileSize > 1000000) {
        echo "
          <script>
           alert('ukuran gambar terlalu besar!')
         </script>
        ";
        return false;
    }

    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'images/' . $newFileName);
    return $newFileName;
}

$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$operator = $_POST['operator'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = upload();

$sqlQuery = "UPDATE products SET nama_produk='$nama', operator='$operator', deskripsi='$deskripsi', harga='$harga', stok='$stok', gambar='$gambar'
             WHERE id = '$id';";
mysqli_query($koneksi, $sqlQuery);
header('location:admin.php');
