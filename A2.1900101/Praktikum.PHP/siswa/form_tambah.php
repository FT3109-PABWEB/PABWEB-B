<div class="row">
<div class="col-md-12">
<div class="alert alert-info" role="alert">
<i class="fas fa-edit"></i> input data siswa
</div>
<div class="card">
<div class="card-body">
<!--form tambah data siswa -->
<form class="needs-validation" action="proses_simpan.php" method="post" enctype="multipart/form-data" novalidate>
<div class="row">
<div class="col">
<div class="form-group col-md-12">
<label>NIS</label>
<input type="text" class="form-control" name="nis" maxlength="50" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" required>
<div class="invalid-feedback">NIS tidak boleh kosong.</div>
 </div>
 
		<div class="form-group col-md-12">
			<label>Nama Siswa</label>
			<input type="text" class="form-control" name="nama" autocomplete="off" required><div class="invalid-feedback">Nama siswa tidak boleh kosong.</div>
			</div>
			<div class="form-group col-md-12">
				<label class="mb-3">JenisKelamin</label>
				<div class="custom-controlcustom-radio">
					<input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin" value="Laki-laki" required>
					<label class="custom-control-label" for="customControlValidation2">Laki-laki</label>
				</div>
			<div class="custom-control custom-radio mb-4">
				<input type="radio" class="custom-control-input" id="customControlValidation3" name="jenis_kelamin" value="Perempuan" required>
				<label class="custom-control-label" for="customControlValidation3">Perempuan</label>
				<div class="invalid-feedback">Pilih salah satu jenis kelamin.</div>
			</div>
		</div>
		<div class="form-group col-md-12"> 
			<label>Agama</label>
			<select class="form-control" name="agama" autocomplete="off" required> 
				<option value=""></option>
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
		<input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
		<div class="invalid-feedback">Tempat Lahir tidak bolehkosong.</div> 
	</div>
	<div class="form-group col-md-12"> 
		<label>TanggalLahir</label>
		<input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off"required>62:<div class="invalid-feedback">Tanggal Lahir tidak boleh kosong.</div> 
	</div>
	<div class="form-group col-md-12"> 
		<label>Alamat</label>
		<textarea class="form-control" rows="2" name="alamat"autocomplete="off" required></textarea>
		<div class="invalid-feedback">Alamat tidak boleh kosong.</div> 
	</div>
	<div class="form-group col-md-12"> 
		<label>No.HP</label>
		<input type="text" class="form-control" name="no_hp" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off"required>
		<div class="invalid-feedback">No. HP tidak boleh kosong.</div> 
	</div>
</div>
<divclass="col">
<div class="form-group col-md-12"> 
	<label>Fotosiswa</label>
	<input type="file" class="form-control-file mb-3" id="foto" name="foto" onchange="return validasiFile()" autocomplete="off"required>
	<div id="imagePreview"><img class="foto-preview" src="foto/default.png"/></div> 
	<div class="invalid-feedback">Foto siswa tidak bolehkosong.</div>
</div>
</div>
</div>
<div class="my-md-4 pt-md-1border-top"> </div> 
<div class="form-group col-md-12right">
	<input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan"> 
	<a href="index.php" class="btn btn-secondary btn-reset"> Batal</a>
</div>
</form>
</div>
</div>
</div>
</div>
