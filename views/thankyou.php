<?php
session_start();
$response = $_SESSION['response'];
$message = $_SESSION['message'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar bg-dark navbar-expand-md" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Newsletter</a>
            </div>
        </nav>
    </header>
    <!-- main -->
    <main>
        <!-- alert -->
        <?php if (isset($message)) : ?>
            <div class="alert alert-<?= $response ? 'success' : 'danger'; ?> alert-dismissible fade show position-absolute w-100" role="alert">
                <?= $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <!-- thankyou -->
        <section class="newsletter bg-secondary text-white py-5  ">
            <div class="container d-flex justify-content-center align-items-center flex-column vh-100">
                <h1>Thank You!</h1>
                <h3>You are now subscribed!</h3>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>