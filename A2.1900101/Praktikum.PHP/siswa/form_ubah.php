<?php
// jika tombol ubah diklik 
if (isset($_GET['nis'])) { 
// ambil data get dariform 
$nis =$_GET['nis'];
//perintahqueryuntukmenampilkandatadaritabelsiswaberdasarkannis 
$query = mysqli_query($db, "SELECT * FROM tbl_siswa WHEREnis='$nis'")or die('Query Error : '.mysqli_error($db)); 
$data =mysqli_fetch_assoc($query);
// buat variabel untuk menampungdata 
$nis            =$data['nis'];
$nama           =$data['nama'];
$tempat_lahir   =$data['tempat_lahir'];
$tanggal_lahir  = date('d-m-Y', strtotime($data['tanggal_lahir'])); 
$jenis_kelamin  =$data['jenis_kelamin'];
$agama          = $data['agama']; 
$alamat         = $data['alamat']; 
$no_hp          =$data['no_hp'];
$foto           = $data['foto'];
 }
 // tutup koneksi 
 mysqli_close($db);
 ?>
  <div class="row">
  	<div class="col-md-12">
  		<div class="alert alert-info" role="alert"> 
  			<i class="fas fa-edit"></i> Ubah DataSiswa 
  		</div>
  		<divclass="card">
  		<divclass="card-body">
  		<!--form ubah data siswa-->
  		<form class="needs-validation" action="proses_ubah.php" method="post" enctype="multipart/form-data"novalidate>
  			<div class="row">
  				<divclass="col">
  				<div class="form-group col-md-12">
  					<label>NIS</label>
  					<input type="text" class="form-control" name="nis" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $nis; ?>" readonlyrequired>
  					<div class="invalid-feedback">NIS tidak bolehkosong.</div>
  				</div>
  				<div class="form-group col-md-12">
  			<label>NamaSiswa</label>
  			<input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama; ?>"required>
  			<div class="invalid-feedback">Nama siswa tidak boleh kosong.</div> 
  		</div>
  		<div class="form-group col-md-12">
  			<label class="mb-3">Jenis Kelamin</label>
  			<?php
  			if ($jenis_kelamin=='Laki-laki') {?>
  				<div class="custom-controlcustom-radio">
  					<input type="radio"class="custom-control-input"id="customControlValidation2" name="jenis_kelamin" value="Laki-laki" checkedrequired>
  					<label class="custom-control-label" for="customControlValidation2">Laki-laki</label>
  					 </div>
  					 <div class="custom-control custom-radiomb-4">
  					 	<input type="radio"class="custom-control-input"id="customControlValidation3" name="jenis_kelamin" value="Perempuan"required>
  					 	<label class="custom-control-label" for="customControlValidation3">Perempuan</label> 
  					 	<div class="invalid-feedback">Pilih salah satu jeniskelamin.</div>
  					 </div>
  					 <?php
  					} else {?>
  						<div class="custom-controlcustom-radio"
  			<inputtype="radio"class="custom-control-input"id="customControlValidation2" name="jenis_kelamin" value="Laki-laki"required>
  			<label class="custom-control-label" for="customControlValidation2">Laki-laki</label> 
  		</div>
  		<div class="custom-control custom-radiomb-4">
  			<input type="radio"class="custom-control-input"id="customControlValidation3" name="jenis_kelamin" value="Perempuan" checkedrequired>
  			<label class="custom-control-label" for="customControlValidation3">Perempuan</label> 
  			<div class="invalid-feedback">Pilih salah satu jeniskelamin.</div>
  		</div>
  		<?php }?>
  	</div>
  	<div class="form-group col-md-12">
  		<label>Agama</label>
  		<select class="form-control" name="agama" autocomplete="off" required> 
  			<option value="<?php echo $agama; ?>"><?php echo $agama;?></option>
  			<option value="Islam">Islam</option>
  			<option value="Kristen Protestan">KristenProtestan</option>
  			<option value="Kristen Katolik">KristenKatolik</option>
  			<option value="Hindu">Hindu</option>
  			<option value="Buddha">Buddha</option>
  		</select>
  		<div class="invalid-feedback">Agama tidak bolehkosong.</div>
  	</div>
  </div>
  <divclass="col">
  <div class="form-group col-md-12">
  	<label>TempatLahir</label>
  	<input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $tempat_lahir; ?>"required>
  	<div class="invalid-feedback">Tempat Lahir tidak boleh kosong.</div> 
  </div>
  <div class="form-group col-md-12">
  	<label>TanggalLahir</label>
  	<input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir"autocomplete="off"value="<?phpecho$tanggal_lahir;?>"required>
  	<div class="invalid-feedback">Tanggal Lahir tidak boleh kosong.</div> 
  </div>
  <div class="form-group col-md-12">
  	<label>Alamat</label>
  	<textarea class="form-control" rows="2" name="alamat" autocomplete="off"required><?php echo $alamat; ?></textarea>
  	<div class="invalid-feedback">Alamat tidak bolehkosong.</div>
  </div>
  <div class="form-group col-md-12">
  	<label>No.HP</label>
  	<input type="text" class="form-control" name="no_hp" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $no_hp; ?>"required>
  	<div class="invalid-feedback">No. HP tidak bolehkosong.</div>
  </div>
</div>
<divclass="col">
<div class="form-group col-md-12">
	<label>Fotosiswa</label>
	<input type="file" class="form-control-file mb-3" id="foto" name="foto" onchange="returnvalidasiFile()"autocomplete="off"value="<?phpecho$foto;?>">
	<div id="imagePreview"><img class="foto-preview" src="foto/<?php echo $foto; ?>"/></div> 
</div>
</div>
</div>
<div class="my-md-4 pt-md-1 border-top"> </div> 
<div class="form-group col-md-12right">
	<input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan"> 
	<a href="index.php" class="btn btn-secondary btn-reset"> Batal</a>
</div>
</form>
</div>
</div>
</div>
</div>