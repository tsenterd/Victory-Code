<?php

session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['username'])) {
    session_destroy();
    header('Location: index.php');
} else {
    unset ($_SESSION['userid']);
    unset ($_SESSION['username']);
    session_destroy();
    header('Location: index.php');
}

?>