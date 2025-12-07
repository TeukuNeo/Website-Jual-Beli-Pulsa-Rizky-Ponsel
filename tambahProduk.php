<?php
$pageTitle = 'Tambah Produk';
include './includes/adminHeader.php';
?>

<div class="container marketing">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-9">
                <h1>Tambah Produk</h1>
                <form action="simpanProduk.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="nama_produk">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Operator</label>
                        <div class="col-sm-10">
                            <input type="text" name="operator" class="form-control" id="operator" placeholder="operator">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" class="form-control" id="harga" placeholder="harga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" name="stok" class="form-control" id="stok" placeholder="stok">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include './includes/adminFooter.php'
?>