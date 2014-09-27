<?php

if(isset($_COOKIE['userid'])) {
    setcookie("loginCredentials", "", time() - 2678400); // "Expires" 1 hour ago
    header('Location: index.php');
} else {
    setcookie("loginCredentials", "", time() - 2678400); // "Expires" 1 hour ago
    header('Location: index.php');
}
?>