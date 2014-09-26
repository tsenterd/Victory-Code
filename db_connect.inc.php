<?php

//database connection settings

define ("HOST", "localhost");

define ("DB_USER", "root");

define ("PASS", "root");

define ("DB", "competition");

$seed = "0dAfghRqSTgx";

$conn = mysqli_connect(HOST, DB_USER, PASS, DB, "3306") or die("could not connect to database.");

?>