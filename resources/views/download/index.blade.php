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
            <div class="col-md-12">
                <?php echo $kategori->keterangan ?>
                <table>
                  <tbody>
                     <?php $i=1; foreach($downloads as $download) { ?>
                      <tr style="border-bottom: solid thin #eee;">
                          <td width="90%">
                              <h5><a href="{{ asset('dokumen/detail/'.$download->id_download.'/'.Str::slug($download->judul_download, '-')) }}" target="_blank"><?php echo $download->judul_download ?></a></h5>
                              <?php echo $download->isi ?>
                          </td>
                          <td class="td-top">
                              <a href="{{ asset('dokumen/unduh/'.$download->id_download) }}" class="btn btn-info"><i class="fa fa-download"></i> Download</a>
                          </td>
                      </tr>
                      <?php $i++; } ?>
                   </tbody>
                </table>
            </div>

         </div>
         <div class="gt-pagination">
            <br><br>
            {{ $downloads->links() }}
         </div>
      </div>
   </div>
</section>
<!--Blog End--> 