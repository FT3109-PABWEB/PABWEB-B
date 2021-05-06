<?php
// set default time zone
// date_default_timezone_get("ASIA/JAKARTA");

// deklarasi variable untuk koneksi ke database
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "db_sekolah";

// koneksi ke database
$db = mysqli_connect($server, $username, $password, $database);


// cek koneksi
if (!$db) {
    // cek koneksi, jika gagal akan menampilkan pesan
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
