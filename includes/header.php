<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include './db/koneksi.php';

$isLoggedIn = isset($_SESSION['user_id']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';

if (!isset($pageTitle)) {
    $pageTitle = 'Rizky Ponsel';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <header >
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-pink" style="background-color: #f52f92ff;">
            <div class="container-fluid">
                <a class="navbar-brand" style="font-weight: bold;" href="#">Rizky Ponsel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="./index.php">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="./about.php">About</a> </li>
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="./promo.php">Promo</a> </li>
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="./contact.php">Contact</a> </li>
                    </ul>

                    <div class="d-flex">
                        <?php if ($isLoggedIn): ?>
                            <span class="navbar-text me-3 text-white">
                                Halo, <?php echo $username; ?>
                            </span>
                            <a class="btn btn-danger" href="./logout.php">
                                <i class="bi bi-box-arrow-right"></i> Sign Out
                            </a>
                        <?php else: ?>
                            <a class="btn btn-light" href="./login.php">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        <?php endif; ?>
                    </div>
                    </div>
            </div>
        </nav>
    </header>
