<?php

//database connection settings

define ("HOST", "54.68.67.189");

define ("DB_USER", "root");

define ("PASS", "root");

define ("DB", "competition");

global $conn;

$conn = mysqli_connect(HOST, DB_USER, PASS, DB, "3306") or die("could not connect to database.");

?>