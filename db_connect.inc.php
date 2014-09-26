<?php

//database connection settings

define ("HOST", "localhost:3306");

define ("DB_USER", "root");

define ("PASS", "root");

define ("DB", "competition");

global $conn;

$conn = mysqli_connect(HOST, DB_USER, PASS) or die("could not connect to database.");

$db = mysqli_select_db($conn, DB) or die();

?>