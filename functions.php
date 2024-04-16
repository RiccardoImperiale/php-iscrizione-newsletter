<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}

if (isset($email)) {
    $response = validateEmail($email);
    $message = generateAlertMsg($response);

    if ($response) {
        header('Location: ./views/thankyou.php');
    } else {
        header('Location: ./index.php');
    }
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function generateAlertMsg($response)
{
    return $response ? 'Success! you are now subscribed' : 'Error! your email is incorrect';
}
