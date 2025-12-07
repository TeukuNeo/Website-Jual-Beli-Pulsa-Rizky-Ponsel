<?php
$pageTitle = 'Beranda';
include './includes/header.php';
?>

<main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button> </div>
        <div class="carousel-inner">
            <?php
            $carousel_query = mysqli_query($koneksi, "SELECT * FROM carousel");
            $carousel_data = mysqli_fetch_all($carousel_query, MYSQLI_ASSOC);
            $i = 0;

            foreach ($carousel_data as $content) {
                $active_class = ($i === 0) ? ' active' : '';
            ?>

                <div class="carousel-item<?= $active_class ?>">

                    <img src="images/<?= strtolower($content['gambar']) ?>" class="d-block w-100 h-75"
                        alt="<?= htmlspecialchars($content['title']) ?>"
                        style="object-fit: cover; min-height: 400px;">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <p><a class="btn btn-lg btn-primary" style="font-weight: bold;" href="login.php">Beli Sekarang</a></p>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
    </div>
</main>
<div class="container marketing">
    <div class="col-md-9">
        <h1 href="#pulsa">Pulsa</h1>
        <div class="row g-4">
            <?php
            $result_produk = mysqli_query($koneksi, "SELECT id, nama_produk, operator, deskripsi, harga, stok, gambar FROM products
                                                    WHERE nama_produk LIKE '%Pulsa%';");

            if ($result_produk && mysqli_num_rows($result_produk) > 0) {
                while ($row = mysqli_fetch_assoc($result_produk)) {
            ?>
                    <div class="col-12 col-md-6 col-lg-3">

                        <div class="card h-100">
                            <img height="125" src="images/<?= strtolower($row['gambar']) ?>" class="card-img-top" alt="Logo Operator">

                            <div class="card-body bg-light">
                                <h5 class="card-title text-truncate" title="<?= $row['nama_produk'] ?>">
                                    <?= $row['nama_produk'] ?>
                                </h5>
                                <p class="card-text text-muted small"><?= $row['operator'] ?></p>

                                <h4 class="card-text text-danger">
                                    Rp <?= number_format($row['harga'], 0, ',', '.') ?>
                                </h4>

                                <p class="card-text small">Stok: <?= $row['stok'] ?></p>

                                <a href="viewPaket.php?id=<?= $row['id'] ?>" style="background-color: #ff5722; border-color: #ff5722;" class="btn btn-primary w-100">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<div class="col-12">
                         <p class="alert alert-info">Tidak ada produk pulsa yang ditemukan saat ini.</p>
                    </div>';
            }
            ?>

        </div>
    </div>
    <div class="col-md-9">
        <h1 href="#kuota">Kuota</h1>
        <div class="row g-4">
            <?php
            $result_produk = mysqli_query($koneksi, "SELECT id, nama_produk, operator, deskripsi, harga, stok, gambar FROM products
                                                    WHERE nama_produk LIKE '%Kuota%';");

            if ($result_produk && mysqli_num_rows($result_produk) > 0) {
                while ($row = mysqli_fetch_assoc($result_produk)) {
            ?>
                    <div class="col-12 col-md-6 col-lg-3">

                        <div class="card h-100">
                            <img height="125" src="images/<?= strtolower($row['gambar']) ?>" class="card-img-top" alt="Logo Operator">

                            <div class="card-body bg-light">
                                <h5 class="card-title text-truncate" title="<?= $row['nama_produk'] ?>">
                                    <?= $row['nama_produk'] ?>
                                </h5>
                                <p class="card-text text-muted small"><?= $row['operator'] ?></p>

                                <h4 class="card-text text-danger">
                                    Rp <?= number_format($row['harga'], 0, ',', '.') ?>
                                </h4>

                                <p class="card-text small">Stok: <?= $row['stok'] ?></p>

                                <a href="viewPaket.php?id=<?= $row['id'] ?>" style="background-color: #ff5722; border-color: #ff5722;" class="btn btn-primary w-100">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<div class="col-12">
                        <p class="alert alert-info">Tidak ada produk pulsa yang ditemukan saat ini.</p>
                       </div>';
            }
            ?>
        </div>
    </div>
    <div class="col-md-9">
        <h1 href="#paket">Paket</h1>
        <div class="row g-4">
            <?php
            $result_produk = mysqli_query($koneksi, "SELECT id, nama_produk, operator, deskripsi, harga, stok, gambar FROM products
                                                    WHERE nama_produk LIKE '%Paket%';");
            if ($result_produk && mysqli_num_rows($result_produk) > 0) {
                while ($row = mysqli_fetch_assoc($result_produk)) {
            ?>
                    <div class="col-12 col-md-6 col-lg-3">

                        <div class="card h-100">
                            <img height="125" src="images/<?= strtolower($row['gambar']) ?>" class="card-img-top" alt="Logo Operator">

                            <div class="card-body bg-light">
                                <h5 class="card-title text-truncate" title="<?= $row['nama_produk'] ?>">
                                    <?= $row['nama_produk'] ?>
                                </h5>
                                <p class="card-text text-muted small"><?= $row['operator'] ?></p>

                                <h4 class="card-text text-danger">
                                    Rp <?= number_format($row['harga'], 0, ',', '.') ?>
                                </h4>

                                <p class="card-text small">Stok: <?= $row['stok'] ?></p>

                                <a href="viewPaket.php?id=<?= $row['id'] ?>" style="background-color: #ff5722; border-color: #ff5722;" class="btn btn-primary w-100">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<div class="col-12">
                        <p class="alert alert-info">Tidak ada produk pulsa yang ditemukan saat ini.</p>
                     </div>';
            }
            ?>
        </div>
    </div>
</div>

<?php
include './includes/footer.php';
?>