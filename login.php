<?php

include("function.inc.php");

if (!isLoggedIn())

{
    if (isset($_POST['cmdlogin']))
    {
        if (checkLogin($_POST['username'], $_POST['password'])) {
            show_userbox();
        } else {
            echo "Incorrect login data!";
            show_loginForm();
        }
    } else {
        show_loginForm();
    }
} else {
    show_userbox();
}
