<p class="text-right">
  <a href="{{ asset('admin/berita') }}" class="btn btn-success btn-sm">
    <i class="fa fa-backward"></i> Kembali
  </a>
</p>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/berita/tambah_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<div class="row form-group">
  <label class="col-md-3 text-right">Judul atau Nama</label>
  <div class="col-md-6">
    <input type="text" name="judul_berita" class="form-control form-control-lg" placeholder="Judul <?php if(isset($_GET['jenis_berita'])) { echo $_GET['jenis_berita']; }else{ echo 'Berita'; } ?>" required="required" value="{{ old('judul_berita') }}">
  </div>
</div>
<?php if(isset($_GET['jenis_berita'])) { ?>
<input type="hidden" name="jenis_berita" value="<?php echo $_GET['jenis_berita'] ?>">
<input type="hidden" name="id_kategori" value="0">
<?php }else{ ?>
<div class="row form-group">
  <label class="col-md-3 text-right">Kategori</label>
  <div class="col-md-6">
    <select name="id_kategori" class="form-control select2">
     <?php foreach($kategori as $kategori) { ?>
       <option value="<?php echo $kategori->id_kategori ?>"><?php echo $kategori->nama_kategori ?></option>
     <?php } ?>
    </select>
    <small class="text-success">Kategori konten</small>
  </div>
</div>
<input type="hidden" name="jenis_berita" value="Berita">
<?php } ?>

<div class="row form-group">
  <label class="col-md-3 text-right">Upload gambar &amp; Urutan</label>
  <div class="col-md-3">
    <input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
  </div>
  <div class="col-md-3">
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="{{ old('urutan') }}">
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Keywords dan Ringkasan<br>(untuk pencarian Google)</label>
  <div class="col-md-6">
    <textarea name="keywords" class="form-control" placeholder="Keywords (untuk pencarian Google)">{{ old('keywords') }}</textarea>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Isi</label> 
  <div class="col-md-9">
    <textarea name="isi" class="form-control" id="kontenku" placeholder="Isi berita">{{ old('isi') }}</textarea>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Status, Tanggal &amp; Jam Publish</label>
  <div class="col-md-2">
    <select name="status_berita" class="form-control select2">
      <option value="Publish">Publikasikan</option>
      <option value="Draft">Simpan sebagai draft</option>}
    </select>
  </div>
  <div class="col-md-2">
    <input type="text" name="tanggal_publish" class="form-control tanggal" placeholder="Tanggal publikasi" value="<?php if(isset($_POST['tanggal_publish'])) { echo old('tanggal_publish'); }else{ echo date('d-m-Y'); } ?>" data-date-format="dd-mm-yyyy">
  </div>
  <div class="col-md-2">
    <input type="text" name="jam_publish" class="form-control time-picker" placeholder="Jam publikasi" value="<?php if(isset($_POST['jam_publish'])) { echo old('jam_publish'); }else{ echo date('H:i:s'); } ?>">
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Icon</label>
  <div class="col-md-6">
    <input type="text" name="icon" class="form-control" placeholder="Icon berita/profil/layanan" value="{{ old('icon') }}">
    <small class="text-success">Icon menggunakan Fontawesome. Kunjungi <a href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a></small>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right"></label>
  <div class="col-md-9">
    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data</button>
      <input type="reset" name="reset" class="btn btn-info " value="Reset">
    </div>
  </div>
</div>
</form>

