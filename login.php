<?php
session_start();

if (isset($_SESSION['user_id'])) {
    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        header("Location: admin.php");
    } else {
        header("Location: index.php");
    }
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="container">
        <main class="form-signin w-100 m-auto">
            <form action="prosesLogin.php" method="POST">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control w-50" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating my-3">
                    <input type="password" name="password" class="form-control w-50" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary w-50 py-2" name="submit_login" type="submit">Sign in</button>
                <a class=" btn-primary w-50 py-2" href="registrasi.php">Sign Up</a>
                <p class="mt-5 mb-3 text-body-secondary">© Rizky Ponsel</p>
            </form>
        </main>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>