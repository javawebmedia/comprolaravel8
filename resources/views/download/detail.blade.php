<?php 
$bg   = DB::table('heading')->where('halaman','Dokumen')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: top center;">
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
            <div class="col-md-5">
                <table class="table">
                   <tbody>
                      <tr>
                         <td>Nama File</td>
                         <td>: <?php echo $download->gambar ?></td>
                      </tr>
                      <tr>
                         <td>Ukuran</td>
                         <td>: <?php 
                         $filename = './assets/upload/file/'.$download->gambar;
                         echo number_format(filesize($filename)/1000000,2, '.', '') ?> MB</td>
                      </tr>
                      <tr>
                         <td class="text-center" colspan="2">
                            <a href="{{ asset('dokumen/unduh/'.$download->id_download) }}" class="btn btn-info btn-block"><i class="fa fa-download"></i> Download</a>
                         </td>
                      </tr>
                   </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <?php echo $download->isi ?>
            </div>
         </div>
         
      </div>
   </div>
</section>
<!--Blog End--> 