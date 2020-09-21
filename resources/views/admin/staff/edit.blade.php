<p class="text-right">
	<a href="{{ asset('admin/staff') }}" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p>
<hr>
<?php
// Validasi error

// Error upload
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Form open
?>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/staff/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_staff" value="{{ $staff->id_staff }}">
<div class="row form-group">
<label class="col-md-3 text-right">Status Tampil &amp; Nomor Urut tampil</label>

<div class="col-md-3">
<select name="status_staff" class="form-control">
  <option value="Ya">Ya, tampilkan di website</option>
  <option value="Tidak" <?php if($staff->status_staff=="Tidak") { echo 'selected'; } ?>>Tidak, jangan tampilkan di website</option>
</select>
<small>Tampilkan di website?</small>
</div>
<div class="col-md-3">
<input type="number" name="urutan" class="form-control" placeholder="No urut tampil" value="{{ $staff->urutan }}">
<small class="text-success">Urutan</small>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Kategori Staff (Board &amp; Team)</label>
<div class="col-md-9">
<select name="id_kategori_staff" class="form-control select2">
  <?php foreach($kategori_staff as $kategori_staff) { ?>
  <option value="<?php echo $kategori_staff->id_kategori_staff ?>"  <?php if($staff->id_kategori_staff==$kategori_staff->id_kategori_staff) { echo 'selected'; } ?>><?php echo $kategori_staff->nama_kategori_staff ?></option>
  <?php } ?>

</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Nama staff <span class="text-danger">*</span></label>
<div class="col-md-9">
<input type="text" name="nama_staff" class="form-control" placeholder="Nama staff" value="{{ $staff->nama_staff }}" required>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Jabatan (Position)</label>
<div class="col-md-9">
<input type="text" name="jabatan" class="form-control" placeholder="Jabatan (Position)" value="{{ $staff->jabatan }}">
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Pendidikan Terakhir</label>
<div class="col-md-9">
<input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir" value="{{ $staff->pendidikan }}">
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Expertise</label>
<div class="col-md-9">
<input type="text" name="expertise" class="form-control" placeholder="Expertise" value="{{ $staff->expertise }}">
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Data Kontak</label>
<div class="col-md-5">
<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $staff->email }}">
<small class="text-success">Alamat Email</small>
</div>
<div class="col-md-4">
<input type="text" name="telepon" class="form-control" placeholder="Telepon/HP" value="{{ $staff->telepon }}">
<small class="text-success">Telepon/HP</small>
</div>
</div>



<div class="row form-group">
<label class="col-md-3 text-right">Upload gambar/Foto</label>
<div class="col-md-9">
<input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
<small>Gambar saat ini:
<br><?php if($staff->gambar!="") { ?>
<img src="{{ asset('assets/upload/staff/thumbs/'.$staff->gambar) }}" class="img img-thumbnail" width="80">
<?php } ?>
</small>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Deskripsi Lengkap</label>
<div class="col-md-9">
<textarea name="isi" class="form-control" id="kontenku" placeholder="Isi staff">{{ $staff->isi }}</textarea>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Keywords pencarian di Google</label>
<div class="col-md-6">
<textarea name="keywords" id="keywords" class="form-control" placeholder="Keywords pencarian di Google">{{ $staff->keywords }}</textarea>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right"></label>
<div class="col-md-9">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
<input type="reset" name="reset" class="btn btn-info " value="Reset">
</div>
</div>
</div>
</form>