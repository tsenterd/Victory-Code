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
        return false;
    } else {
        return true;
    }

}

function valid_password($pass)
{
    if (preg_match('/^\w{6,15}$/', $pass)) {
        return false;
    } else {
        return true;
    }
}

?>