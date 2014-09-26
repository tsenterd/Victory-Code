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

    if (!valid_username($u) || !valid_password($p) || !user_exists($u)) {
        return false;
    }

    $query = sprintf("
    SELECT userid
    FROM users
    WHERE
    username = '%s' AND password = '%s'
    AND disabled = 0 AND activated = 1
    LIMIT 1;
    ", mysql_real_escape_string($u), mysql_real_escape_string(sha1($p)));

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) != 1) {
        return false;
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $u;
        return true;
    }

    return false;

}

?>