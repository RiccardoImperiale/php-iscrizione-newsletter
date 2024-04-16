<?php

require_once __DIR__ . '/helpers/functions.php';

session_start();

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $response = validateEmail($email);
    $message = generateAlertMsg($response);

    $_SESSION['response'] = $response;
    $_SESSION['message'] = $message;

    if ($response) {
        header('Location: ./thankyou.php');
        die;
    }
}

include_once __DIR__ . '/layout/head.php';
include_once __DIR__ . '/layout/partials/alert.php';
include_once __DIR__ . '/layout/partials/jumbotron.php';
include_once __DIR__ . '/layout/partials/posts.php';
?>

<!-- newsletter -->
<section class="newsletter bg-secondary text-white py-5">
    <div class="container">
        <div class="w-75 m-auto text-center pb-4">
            <h3>Newsletter</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cumque exercitationem vero vitae harum a aspernatur similique labore voluptates impedit iure dolores mollitia sapiente iusto doloribus laboriosam fuga, corporis reiciendis?
            </p>
        </div>
        <form action="" method="get" class="d-flex align-items-center justify-content-center">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <div class="d-flex align-items-center gap-1">
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
                <div id="emailHelp" class="form-text">Type your email address</div>
            </div>
        </form>
    </div>
</section>

<?php include_once __DIR__ . '/layout/foot.php'; ?>