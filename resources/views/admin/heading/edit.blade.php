
<div class="modal fade" id="Edit<?php echo $heading->id_heading ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title" id="myModalLabel">Edit data</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
    
<form action="{{ asset('admin/heading/edit') }}" enctype="multipart/form-data"  method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_heading"   value="{{ $heading->id_heading }}">

<div class="form-group row">
	<label class="col-md-3">Heading untuk Halaman</label>
	<div class="col-md-9">
		<select name="halaman" class="form-control">
			<option value="Berita">Berita</option>
			<option value="AWS" <?php if($heading->halaman=="AWS") { echo 'selected'; } ?>>AWS Indonesia</option>
			<option value="Team" <?php if($heading->halaman=="Team") { echo 'selected'; } ?>>Board and Team</option>
			<option value="Kontak" <?php if($heading->halaman=="Kontak") { echo 'selected'; } ?>>Halaman Kontak</option>
			<option value="Aksi" <?php if($heading->halaman=="Aksi") { echo 'selected'; } ?>>Halaman Aksi</option>
			<option value="Materi" <?php if($heading->halaman=="Materi") { echo 'selected'; } ?>>Materi</option>
			<option value="Dokumen" <?php if($heading->halaman=="Dokumen") { echo 'selected'; } ?>>Dokumen</option>
			<option value="Layanan" <?php if($heading->halaman=="Layanan") { echo 'selected'; } ?>>Layanan</option>
			<option value="Provider" <?php if($heading->halaman=="Provider") { echo 'selected'; } ?>>Provider</option>
			<option value="Terjadi" <?php if($heading->halaman=="Terjadi") { echo 'selected'; } ?>>Apa yang terjadi?</option>
		</select>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Upload Gambar Status</label>
	<div class="col-md-9">
		<input type="file" name="gambar" class="form-control" placeholder="Upload Gambar" value="">
		@if ($errors->has('gambar'))
	      	<span class="text-danger">{{ $errors->first('gambar') }}</span>
	    @endif  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Nama Status</label>
	<div class="col-md-9">
		<input type="text" name="judul_heading" class="form-control" placeholder="Nama kategori berita" value="<?php echo $heading->judul_heading ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Keterangan</label>
	<div class="col-md-9">
		<textarea name="keterangan" class="form-control simple" placeholder="Keterangan">{{ $heading->keterangan }}</textarea>
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
