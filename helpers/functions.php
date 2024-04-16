<?php

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function generateAlertMsg($response)
{
    return $response ? 'Success! you are now subscribed' : 'Error! your email is incorrect';
}

function old($field)
{
    return isset($_GET[$field]) ? htmlspecialchars($_GET[$field]) : '';
}
