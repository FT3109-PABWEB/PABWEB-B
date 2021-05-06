<?php 
// set default timezone
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi database
$server = "localhost"; // server database, default"localhost"
$username = "root"; // username database, default"root"
$password = ""; // password database, default kosong
$database = "db_sekolah"; // memilih database yang digunakan

// koneksi ke database
$db = mysqli_connect($server, $username, $password, $database);

// mengecek koneksi
if (!$db) {
	// mengecek koneksi gagal, tampilkan pesan gagal
	die('Koneksi Database Gagal: '.mysqli_connect_error());
}

?>