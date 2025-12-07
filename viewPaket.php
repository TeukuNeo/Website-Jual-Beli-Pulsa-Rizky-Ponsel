<?php
$pageTitle = 'Berlangganan';
include './includes/header.php';

$id = $_GET['id'];
$sqlQuery = mysqli_query($koneksi, "SELECT * FROM products WHERE id = $id");
$rows = mysqli_fetch_array($sqlQuery);
?>

<div class="container marketing">
    <div class="container my-5">
        <h1 class="mb-4">Beli Paket</h1>
        <div class="row justify-content-center">
            <div class="col-lg-7 p-0">
                <div class="bg-dark rounded-start shadow-sm" style="min-height: 350px; overflow: hidden;">
                    <img src="images/<?php echo $rows['gambar']; ?>"
                        class="w-100 h-100"
                        style="object-fit: cover;"
                        alt="Gambar Paket Data">
                </div>
            </div>

            <div class="col-lg-4 p-0">
                <div class="bg-white p-4 rounded-end shadow-sm border border-start-0">
                    <h3 class="h5 fw-bold mb-3">Rincian Paket</h3>

                    <div class="d-flex justify-content-between align-items-start py-2 border-bottom">
                        <div>
                            <i class="bi bi-globe me-2 text-muted"></i>
                            <span class="fw-medium">Operator</span>
                            <div class="small text-muted ms-4"><?php echo $rows['operator']; ?></div>
                        </div>
                        <div class="text-end">
                            <span class="fw-bold">Deskripsi</span>
                            <div class="small text-muted"><?php echo $rows['deskripsi']; ?></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom mb-3">
                        <span class="fw-medium">Stok</span>
                        <span class="fw-bold"><?php echo $rows['stok']; ?></span>
                    </div>

                    <div class="mt-4">
                        <h4 class="text-danger fw-bolder mb-0">Rp <?php echo $rows['harga']; ?></h4>
                        <p class="small text-muted mb-4"><?php echo $rows['nama_produk']; ?></p>
                    </div>

                    <a href="login.php" class="btn btn-danger btn-lg w-100 fw-bold" style="background-color: #ff5722; border-color: #ff5722;">Beli</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include './includes/footer.php';
?>