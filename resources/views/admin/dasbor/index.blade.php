<div class="alert alert-info">
  <p>Hai <strong>{{ Session()->get('nama') }}</strong>, Selamat datang di Halaman Dashboard Administrator</p>
  <p>Bagi teman-teman yang sudah mengunduh website ini, mohon follow dan like akun Instagram kami di <a href="https://www.instagram.com/javawebmedia/" class="btn btn-warning">https://www.instagram.com/javawebmedia/</a></p>
</div>
<hr>
<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Artikel &amp; Berita</span>
        <span class="info-box-number">
          <?php 
          $berita = DB::table('berita')->where('jenis_berita','Berita')->get(); 
          echo $berita->count();
          ?>
          <small>Sudah dibuat</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Layanan
        </span>
        <span class="info-box-number">
        <?php 
          $berita = DB::table('berita')->where('jenis_berita','Layanan')->get(); 
          echo $berita->count();
          ?>
          <small>Sudah Dipublikasikan</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-download"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">File &amp; Dokumen</span>
        <span class="info-box-number">
        <?php 
          $download = DB::table('berita')->get(); 
          echo $download->count();
          ?>
          <small>File</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-image"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Galeri</span>
        <span class="info-box-number">
        	<?php 
          $galeri = DB::table('galeri')->get(); 
          echo $galeri->count();
          ?>
          <small>Gambar</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fa fa-check"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Rekening</span>
        <span class="info-box-number">
          <?php 
          $rekening = DB::table('rekening')->get(); 
          echo $rekening->count();
          ?>
          <small>Bank</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Staff dan Team
        </span>
        <span class="info-box-number">
        <?php 
          $staff = DB::table('staff')->get(); 
          echo $staff->count();
          ?>
          <small>Orang</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-video"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Video Youtube</span>
        <span class="info-box-number">
        <?php 
          $video = DB::table('video')->get(); 
          echo $video->count();
          ?>
          <small>Video</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Agenda Kegiatan</span>
        <span class="info-box-number">
        	<?php 
          $agenda = DB::table('agenda')->get(); 
          echo $agenda->count();
          ?>
          <small>Acara</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->