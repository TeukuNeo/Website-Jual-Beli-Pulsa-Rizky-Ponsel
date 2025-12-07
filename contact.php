<?php
$pageTitle = 'Contact';
include './includes/header.php';
?>

<div class="container">
  <div class="container my-5">
    <h1>Hubungi Kami</h1>
    <div class="row justify-content-center">

      <div class="col-lg-7 mb-4 mb-lg-0">
        <div class="card shadow-sm p-4">
          <h3 class="h5 card-title mb-3">Tulis Pesan Anda</h3>

          <form action="proses_feedback.php" method="POST">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="contoh@domain.com" required>
              <div id="emailHelp" class="form-text">Kami tidak akan membagikan email Anda kepada siapapun.</div>
            </div>

            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan / Feedback Anda</label>
              <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3 w-100">Kirim Feedback</button>
          </form>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card shadow-sm p-4 bg-light">
          <h3 class="h5 card-title mb-3">Informasi Kontak Rizky Ponsel</h3>

          <ul class="list-unstyled">
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-whatsapp text-success fs-4 me-3"></i>
              <div>
                <strong class="d-block">Nomor Telepon/WhatsApp:</strong>
                <a href="https://wa.me/6281234567890" class="text-decoration-none">+62 812 3456 7890</a>
              </div>
            </li>

            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-envelope-fill text-info fs-4 me-3"></i>
              <div>
                <strong class="d-block">Email:</strong>
                <a href="mailto:info@rizkyponsel.com" class="text-decoration-none">info@rizkyponsel.com</a>
              </div>
            </li>

            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-geo-alt-fill text-danger fs-4 me-3"></i>
              <div>
                <strong class="d-block">Alamat Konter Fisik:</strong>
                Jl. Raya Konter No. 45, Kota XYZ
              </div>
            </li>
          </ul>

          <div class="mt-3">
            <small class="text-muted">Klik pada alamat untuk melihat di peta.</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include './includes/footer.php';
?>