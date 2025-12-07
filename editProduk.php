<?php
$pageTitle = 'Edit Produk';
include './includes/adminHeader.php';

$id = $_GET['id'];
$sqlQuery = "SELECT * FROM products WHERE id = $id";
$produk = mysqli_query($koneksi, $sqlQuery);
$row = mysqli_fetch_array($produk);

?>

<div class="container marketing">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-9">
                <h1>Edit Produk</h1>
                <form action="ubahProduk.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id" class="form-control" id="id" placeholder="id" value="<?php echo $row['id']; ?>">
                            <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="nama_produk" value="<?php echo $row['nama_produk']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Operator</label>
                        <div class="col-sm-10">
                            <input type="text" name="operator" class="form-control" id="operator" placeholder="operator" value="<?php echo $row['operator']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi" value="<?php echo $row['deskripsi']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" class="form-control" id="harga" placeholder="harga" value="<?php echo $row['harga']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" name="stok" class="form-control" id="stok" placeholder="stok" value="<?php echo $row['stok']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <img width="120" height="60" src="images/<?php echo $row['gambar']; ?>" alt="">
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include './includes/adminFooter.php'
?>