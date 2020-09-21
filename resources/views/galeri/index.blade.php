<?php 
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End--> 
<!--Blog Start-->
<section class="wf100 p80 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            
              <?php foreach($galeris as $galeri) { ?>
          <!--Blog Small Post Start-->
            <div class="col-md-6 col-sm-12">
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/image/thumbs/'.$galeri->gambar) }}" alt="><?php  echo $galeri->judul_galeri ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}"><?php  echo $galeri->judul_galeri ?></a></h5>
                     <ul class="post-meta">
                        <li> <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}"><i class="fas fa-calendar-alt"></i> {{ tanggal('tanggal_id',$galeri->tanggal)}}</a> </li>
                        <li> <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}"><i class="fas fa-comments"></i> {{ $galeri->nama_kategori_galeri }}</a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($galeri->isi), 100, $end='...') ?></p>
                     <a href="{{ asset('galeri/detail/'.$galeri->id_galeri) }}" class="read-post">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End--> 
          <?php } ?>

           </div>
         <div class="gt-pagination">
            {{ $galeris->links() }}
         </div>
      </div>
   </div>
</section>
<!--Blog End--> 