<?php 
$bg   = DB::table('heading')->where('halaman','Layanan')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End--> 
<!--About Start-->
<section class="wf100 about">
<!--About Txt Video Start-->
<div class="about-video-section wf100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-text text-aws">               
               <?php echo $berita->isi ?>
            </div>
         </div>
         <div class="col-lg-6">
            <a href="#"><img src="{{ asset('assets/upload/image/'.$berita->gambar) }}" alt="{{ $title }}" class="img img-fluid img-thumbnail"></a>
         </div>
         
         
      </div>
   </div>
</div>
</section>
<!--About Txt Video End--> 

 <!--Service Area Start-->
 <section class="donation-join wf100 p80">
   <div class="container text-center">
      <div class="row">
         <?php foreach($layanan as $layanan) { ?>
            <div class="col-md-4 col-sm-6">
               <br><a href="{{ asset('berita/layanan/'.$layanan->slug_berita) }}">
               <img src="{{ asset('assets/upload/image/thumbs/'.$layanan->gambar) }}" alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid"></a>
               <div class="volbox">
                  <h6>{{ $layanan->judul_berita }}</h6>
                  <p>{{ $layanan->keywords }}</p>
                  <a href="{{ asset('berita/layanan/'.$layanan->slug_berita) }}">Lihat detail</a> 
               </div>
            </div>
            <!--box  end--> 
         <?php } ?>
      </div>
   </div>
</div>
<br><br>
</section>
<div class="clearfix"><br><br></div>


