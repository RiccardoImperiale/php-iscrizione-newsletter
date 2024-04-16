<?php

$email = $_GET['email'];

if (isset($email)) {
    $response = validateEmail($email);
    $message = generateAlertMsg($response);
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function generateAlertMsg($response)
{
    return $response ? 'Success! you are now subscribed' : 'Error! your email is incorrect';
}
