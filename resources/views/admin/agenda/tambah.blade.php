<p class="text-right">
  <a href="{{ asset('admin/agenda') }}" class="btn btn-success btn-sm">
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

<form action="{{ asset('admin/agenda/tambah_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<div class="row form-group">
  <label class="col-md-3 text-right">Judul atau Nama</label>
  <div class="col-md-6">
    <input type="text" name="judul_agenda" class="form-control form-control-lg" placeholder="Judul atau Nama" required="required" value="{{ old('judul_agenda') }}">
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Jenis &amp; Kategori</label>
  <div class="col-md-3">
    <select name="jenis_agenda" class="form-control select2">
     <option value="Event">Event</option>
     <option value="Agenda" <?php if(isset($_GET['jenis_agenda']) && $_GET['jenis_agenda']=='Agenda') { echo 'selected'; } ?>>Agenda</option>
   </select>
   <small class="text-success">Jenis konten</small>
 </div>
 <div class="col-md-3">
  <select name="id_kategori_agenda" class="form-control select2">
   <?php foreach($kategori_agenda as $kategori_agenda) { ?>
     <option value="<?php echo $kategori_agenda->id_kategori_agenda ?>"><?php echo $kategori_agenda->nama_kategori_agenda ?></option>
   <?php } ?>
 </select>
 <small class="text-success">Kategori konten</small>
</div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Mulai</label>
  <div class="col-md-3">
    <input type="text" name="tanggal_mulai" class="form-control tanggal" placeholder="Tanggal mulai" value="<?php if(isset($_POST['tanggal_mulai'])) { echo old('tanggal_mulai'); }else{ echo date('d-m-Y'); } ?>" data-date-format="dd-mm-yyyy">
    <small class="text-success">Format: dd-mm-yyyy</small>
  </div>
  <div class="col-md-3">
    <input type="text" name="jam_mulai" class="form-control time-picker" placeholder="Jam mulai" value="<?php if(isset($_POST['jam_mulai'])) { echo old('jam_mulai'); }else{ echo '08:00'; } ?>">
    <small class="text-success">Format: jam:menit:detik</small>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Selesai</label>
  <div class="col-md-3">
    <input type="text" name="tanggal_selesai" class="form-control tanggal" placeholder="Tanggal selesai" value="<?php if(isset($_POST['tanggal_selesai'])) { echo old('tanggal_selesai'); }else{ echo date('d-m-Y'); } ?>" data-date-format="dd-mm-yyyy">
    <small class="text-success">Format: dd-mm-yyyy</small>
  </div>
  <div class="col-md-3">
    <input type="text" name="jam_selesai" class="form-control time-picker" placeholder="Jam selesai" value="<?php if(isset($_POST['jam_selesai'])) { echo old('jam_selesai'); }else{ echo '17:00'; } ?>">
    <small class="text-success">Format: jam:menit:detik</small>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Upload gambar</label>
  <div class="col-md-6">
    <input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Tempat pelaksanaan</label>
  <div class="col-md-6">
    <?php $site   = DB::table('konfigurasi')->first(); ?>
    <input type="text" name="tempat" class="form-control" placeholder="Tempat pelaksanaan" required="required" value="<?php if(isset($_POST['tempat'])) { echo old('tempat'); }else{ echo $site->namaweb; } ?>">
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Peta Google Map</label>
  <div class="col-md-9">
    <textarea name="google_map" class="form-control" placeholder="Peta Google Map"><?php if(isset($_POST['tempat'])) { echo old('google_map'); }else{ echo $site->google_map; } ?></textarea>
    <small class="text-warning">Berbeda lokasi? Hapus konten di atas dan embed map baru. Baca cara embed Google Map di <a href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en"  target="_blank" class="badge badge-success" title="Cara embed google Map"><i class="fa fa-link"></i> Link Ini</a>.</small>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Isi dan Keterangan Lengkap</label> 
  <div class="col-md-9">
    <textarea name="isi" class="form-control" id="kontenku" placeholder="Isi agenda">{{ old('isi') }}</textarea>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Keywords dan Ringkasan<br>(untuk pencarian Google)</label>
  <div class="col-md-6">
    <textarea name="keywords" class="form-control" placeholder="Keywords (untuk pencarian Google)">{{ old('keywords') }}</textarea>
  </div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">Status, Tanggal &amp; Jam Publish</label>
  <div class="col-md-2">
    <select name="status_agenda" class="form-control select2">
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
    <input type="text" name="icon" class="form-control" placeholder="Icon agenda/profil/layanan" value="{{ old('icon') }}">
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

