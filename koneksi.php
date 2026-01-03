<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_app_to_do_list";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
