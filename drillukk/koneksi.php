<?php

$server = "localhost";
$username_db = "root";
$password_db = "";
$database = "drillukk";

$conn = mysqli_connect($server, $username_db, $password_db, $database);

if(!$conn) {
    die("Koneksi gagal: " .mysqli_connect_error()); 

}
