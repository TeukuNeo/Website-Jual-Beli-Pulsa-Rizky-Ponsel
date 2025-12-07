<?php
$pageTitle = 'Admin';
include './includes/adminHeader.php';
?>

<div class="container marketing">
    <div class="container my-5">
        <h1>Admin</h1>
        <a href="tambahProduk.php">Tambah Produk</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Operator</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $produk = mysqli_query($koneksi, "SELECT * FROM products");
                if ($produk && mysqli_num_rows($produk) > 0) {
                    while ($row = mysqli_fetch_assoc($produk)) {
                ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td>
                                <img width="75" height="75" src="images/<?= $row['gambar']; ?>" alt="">
                            </td>
                            <td><?= $row['nama_produk']; ?></td>
                            <td><?= $row['operator']; ?></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td>Rp <?= $row['harga']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td>
                                <a class="btn btn-success" href="editProduk.php?id=<?= $row['id']; ?>">Edit</a>
                                <a class="btn btn-danger"
                                   onclick="return confirm('Apakah kamu yakin ingin menghapus produk ini?');"
                                   href="hapusProduk.php?id=<?=  $row['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                <?php    }
                } else {
                    echo "
                       <h1>Tidak Ada Data Tabel</h1>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include './includes/adminFooter.php'
?>