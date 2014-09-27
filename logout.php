<?php

if(isset($_COOKIE['userid'])) {
    setcookie("competition", "", time() - 2678400); // "Expires" 1 hour ago
    header('Location: index.php');
} else {
    setcookie("competition", "", time() - 2678400); // "Expires" 1 hour ago
    header('Location: index.php');
}
?>