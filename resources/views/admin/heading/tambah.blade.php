<button class="btn btn-success" data-toggle="modal" data-target="#Tambah">
    <i class="fa fa-plus"></i> Tambah Baru
</button>
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title" id="myModalLabel">Tambah data?</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
    
<form action="{{ url('admin/heading/tambah') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
{{ csrf_field() }}

<div class="form-group row">
	<label class="col-md-3">Heading untuk Halaman</label>
	<div class="col-md-9">
		<select name="halaman" class="form-control">
			<option value="Berita">Berita</option>
			<option value="Kontak">Halaman Kontak</option>
			<option value="AWS">AWS Indonesia</option>
			<option value="Team">Halaman Board and Team</option>
			<option value="Aksi">Halaman Aksi</option>
			<option value="Materi">Materi</option>
			<option value="Dokumen">Dokumen</option>
			<option value="Layanan">Layanan</option>
			<option value="Provider">Provider</option>
			<option value="Terjadi">Apa yang terjadi?</option>
		</select>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Upload Gambar Status</label>
	<div class="col-md-9">
		<input type="file" name="gambar" class="form-control" placeholder="Upload Gambar" value="" required>
		@if ($errors->has('gambar'))
	      	<span class="text-danger">{{ $errors->first('gambar') }}</span>
	    @endif  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Nama Status</label>
	<div class="col-md-9">
		<input type="text" name="judul_heading" class="form-control" placeholder="Nama kategori berita" value="" required>
		@if ($errors->has('judul_heading'))
	      	<span class="text-danger">{{ $errors->first('judul_heading') }}</span>
	    @endif  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Keterangan</label>
	<div class="col-md-9">
		<textarea name="keterangan" class="form-control simple" placeholder="Keterangan"></textarea>
		@if ($errors->has('keterangan'))
	      	<span class="text-danger">{{ $errors->first('keterangan') }}</span>
	    @endif  
	</div>
</div>



<div class="form-group row">
	<label class="col-md-3"></label>
	<div class="col-md-9">
<div class="btn-group">
<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
<div class="clearfix"></div>

</form>

</div>
</div>
</div>
</div>
