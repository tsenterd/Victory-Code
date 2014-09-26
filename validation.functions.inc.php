<?php

#### Validation functions ####

function valid_email($email)
{

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function valid_username($username)
{

    if (preg_match('/^\w{5,30}$/', $username)) {
        return true;
    } else {
        return false;
    }

}

function valid_password($pass)
{
    if (preg_match('/^\w{6,15}$/', $pass)) {
        return true;
    } else {
        return false;
    }
}

?>