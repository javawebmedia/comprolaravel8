<style>
#imagePreview {
    width: 150px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>
<script type="text/javascript">
$(function() {
    $("#file").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/konfigurasi/proses_profil') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<div class="row">
    <input type="hidden" name="id_konfigurasi" value="<?php echo $site->id_konfigurasi ?>">
    
    <div class="col-md-12">
    <div class="form-group">
    <label>Judul Singkat</label>
    <input type="text" name="nama_singkat" placeholder="Nama singkat organisasi/perusahaan" value="<?php echo $site->nama_singkat ?>" required class="form-control">
    </div>

    <div class="form-group">
    <label>Summary of the company</label>
    <textarea name="tentang" rows="3" class="form-control" id="kontenku" id="isi" placeholder="Summary of the company"><?php echo $site->tentang ?></textarea>
    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <label>Your current image</label><br>
            <img src="{{ asset('assets/upload/image/'.$site->gambar) }}" class="img img-thumbnail">
        </div>
        <div class="form-group col-md-10">
            <label>Upload Gambar</label>
            <input type="file" name="gambar" class="form-control" id="file">
            <div id="imagePreview"></div>
        </div>

        
    </div>
   <div class="form-group text-center">
    <input type="submit" name="submit" value="Simpan Profil Baru" class="btn btn-success btn-lg">
    <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-lg">
</div>
</div>
</div>
<br><br>
</form>