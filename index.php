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
?>

<!-- jumbotron -->
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">
            Lorem ipsum dolor sit.
        </p>
        <button class="btn btn-primary btn-lg" type="button">Browse Me</button>
    </div>
</div>
<!-- posts -->
<section class="posts my-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/400/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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