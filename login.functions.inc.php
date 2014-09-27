<?php

#login functions

include "db_connect.inc.php";

function isLoggedIn() {
    if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }
}

function checkLogin ($u, $p) {

    global $conn;

    global $seed;

    //|| !user_exists($u)

    /*if ((valid_username($u) == false) || (valid_password($p) == false)) {
        return false;
    }*/

    if (!valid_username($u)) {
        return false;
    }

    $user = mysql_real_escape_string($u);
    $pass = mysql_real_escape_string(sha1($p . $seed));

    $query = "SELECT userid FROM users WHERE username = '$user' AND password = '$pass' AND disabled = 0 AND activated = 1 LIMIT 1";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) != 1) {
        return false;
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $u;
        return true;
    }
}

?>