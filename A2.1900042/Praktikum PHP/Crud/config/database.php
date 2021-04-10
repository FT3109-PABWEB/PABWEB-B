<?php 							// tag pembuka syntax PHP
 // set default timezone
 date_default_timezone_set("ASIA/JAKARTA");

 // deklarasi parameter koneksi database
 $server = "localhost";          // server database, default “localhost” atau “127.0.0.1”
 $username = "id16572149_deni"; 			 // username database, default “root”
 $password = "BdJg4&XSCyS)|%oh"; 				 // password database, default kosong
 $database = "id16572149_db_sekolah"; 		 // memilih database yang akan digunakan

// koneksi database
 $db = mysqli_connect($server, $username, $password, $database);

 // cek koneksi 
 if (!$db) {
// cek koneksi gagal, tampilkan pesan gagal
die('Koneksi Database Gagal : '.mysqli_connect_error());
 }

 try {    
    $dbpdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch(PDOException $e) {
    die("Terjadi masalah: " . $e->getMessage());
}
 
 ?>							<!-- tag penutup syntax PHP -->

