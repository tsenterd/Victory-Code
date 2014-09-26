<?php

//database connection settings

define ("HOST", "localhost:3306");

define ("DB_USER", "root");

define ("PASS", "root");

define ("DB", "competition");

$seed = "0dAfghRqSTgx";

$conn = mysqli_connect(HOST, DB_USER, PASS) or die("could not connect to database.");

$database = mysqli_select_db($conn, DB);

?>