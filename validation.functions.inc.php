<?php

#### Validation functions ####

function valid_email($email)
{

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function valid_username($username, $minlength = 3, $maxlength = 30)
{

    $username = trim($username);

    if (empty($username))
    {
        return false; // it was empty
    }
    if (strlen($username) > $maxlength)
    {
        return false; // to long
    }
    if (strlen($username) < $minlength)
    {

        return false; //toshort
    }

    $result = preg_match("/^[\w]$/", $username); //only A-Z, a-z and 0-9 are allowed

    if ($result)
    {
        return true; // ok no invalid chars
    } else
    {
        return false; //invalid chars found
    }

    return false;

}

function valid_password($pass, $minlength = 6, $maxlength = 15)
{
    $pass = trim($pass);

    if (empty($pass))
    {
        return false;
    }

    if (strlen($pass) < $minlength)
    {
        return false;
    }

    if (strlen($pass) > $maxlength)
    {
        return false;
    }

    $result = preg_match("/^[\w]$/", $pass);

    if ($result)
    {
        return true;
    } else
    {
        return false;
    }

    return false;

}

?>