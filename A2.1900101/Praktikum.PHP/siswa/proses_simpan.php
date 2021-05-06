<?php
// panggil file database.php untuk koneksi ke database 
require_once "config/database.php";
// jika tombol simpan diklik
if (isset($_POST['simpan'])) {
	// ambil data hasil sumbit dari form

	$nis= mysqli_real_escape_string($db, trim($_POST['nis']));
	$nama= mysqli_real_escape_string($db, trim($_POST['nama']));			

	$tempat_lahir = mysqli_real_escape_string($db, trim($_POST['tempat_lahir'])); 
	$tanggal_lahir = mysqli_real_escape_string($db,trim(date('Y-m-d',strtotime($_POST['tanggal_lahir']))));
	$jenis_kelamin = mysqli_real_escape_string($db, trim($_POST['jenis_kelamin']));
	$agama= mysqli_real_escape_string($db,trim($_POST['agama']));
	$alamat= mysqli_real_escape_string($db, trim($_POST['alamat'])); 
	$no_hp= mysqli_real_escape_string($db, trim($_POST['no_hp']));
	 $nama_file=$_FILES['foto']['name'];
	 $tmp_file= $_FILES['foto']['tmp_name']; 
	 // Set path folder tempat menyimpan filenya
	 $path="foto/".$nama_file;
	 //perintahqueryuntukmenampilkannisdaritabelsiswaberdasarkannisdarihasilsubmitform 
	 $query = mysqli_query($db, "SELECT nis FROM tbl_siswa WHEREnis='$nis'")
	 or die('Ada kesalahan pada query tampil data nis: '.mysqli_error($db));
	  $rows =mysqli_num_rows($query);
	  // jika nis sudahada 
	  if ($rows > 0){
	  	// tampilkan pesan gagal simpandata
	  	header("location:index.php?alert=4&nis=$nis");
	  }
	  // jika nis belumada 
	  else{
	  // uploadfile
	  	if(move_uploaded_file($tmp_file, $path)) { 
	  	// Jika file berhasil diupload, Lakukan:
	  	// perintah query untuk menyimpan data ke tabelsiswa
 $insert = mysqli_query($db, "INSERT INTO tbl_siswa(nis,nama,tempat_lahir,tanggal_lahir,
jenis_kelamin,agama,alamat,no_hp,foto)
VALUES('$nis','$nama','$tempat_lahir','$tanggal_lahir',
'$jenis_kelamin','$agama','$alamat','$no_hp','$nama_file')")
 or die('Ada kesalahan pada query insert : '.mysqli_error($db));
	  	// cekquery
	  	if ($insert){
	  		// jika berhasil tampilkan pesan berhasil simpandata 
	  		header("location:index.php?alert=1");
	  	}
	  }
	}
}
	  // tutup koneksi 
	  mysqli_close($db);
	  ?>