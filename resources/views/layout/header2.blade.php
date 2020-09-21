<?php
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myprofil->nav_profil();
?>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ asset('/') }}"><span>
          <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt="Nitrico" style="min-height: 50px; width: auto;">
        </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ asset('/') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>

            <li class="active"><a href="{{ asset('/') }}">Home</a></li>
            <li><a href="{{ asset('berita') }}">Berita</a></li>
            <li class="drop-down"><a href="{{ asset('profil') }}review">Profil</a>
              <ul>
                <?php foreach($nav_profil as $nav_profil) { ?>
                <li><a href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}"><?php echo $nav_profil->judul_berita ?></a></li>
                <?php } ?>
              </ul>
            </li>


            <li class="drop-down"><a href="#">Galeri</a>
              <ul>

                <li><a href="{{ asset('video') }}">Video Youtube</a></li>
                <li><a href="{{ asset('galeri') }}">Galeri Gambar</a></li>
                <li><a href="{{ asset('download') }}">Unduhan File</a></li>
              </ul>
            </li>
            <li><a href="{{ asset('kontak') }}">Kontak</a></li>
              <li>
                  <a href="{{ asset('pemesanan') }}" class="orange" title="Form Pemesanan"><div class="belanja"><i class="fa fa-shopping-cart"></i> Form Order</div></a>
              </li>


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><!-- ======= Hero Section ======= -->
