<?php
session_start();
$response = $_SESSION['response'];
$message = $_SESSION['message'];

include_once __DIR__ . '/layout/head.php';
include_once __DIR__ . '/layout/partials/alert.php';
?>

<!-- thankyou -->
<section class="newsletter bg-secondary text-white py-5  ">
    <div class="container d-flex justify-content-center align-items-center flex-column vh-100">
        <h1>Thank You!</h1>
        <h3>You are now subscribed!</h3>
    </div>
</section>
</main>

<?php include_once __DIR__ . '/layout/foot.php'; ?>