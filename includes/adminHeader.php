<?php
include './db/koneksi.php';
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
            <div class="container-fluid"> <a class="navbar-brand" style="font-weight: bold;" href="#">Rizky Ponsel</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Product</a> </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-danger" href="./logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>