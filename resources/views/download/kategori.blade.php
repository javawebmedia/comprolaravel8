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
              <?php foreach($kategori_download as $kategori_download) { $id_kategori_download = $kategori_download->id_kategori_download; ?>
               <h2>{{ $kategori_download->nama_kategori_download }}</h2>
               <hr>
               <?php echo $kategori_download->keterangan ?>

               <?php 
                    $download = DB::table('download')
                    ->join('kategori_download', 'kategori_download.id_kategori_download', '=', 'download.id_kategori_download','LEFT')
                    ->select('download.*', 'kategori_download.nama_kategori_download')
                    ->where('download.id_kategori_download',$id_kategori_download)
                    ->orderBy('download.id_download','DESC')
                    ->paginate(10); ?>
                <table class="table">
                  <tbody>
                     <?php $i=1; foreach($download as $download) { ?>
                      <tr style="border-bottom: solid thin #eee;">
                          <td width="80%">
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

              <?php } ?>
            </div>

         </div>
         <div class="gt-pagination">
            <br><br>
         </div>
      </div>
   </div>
</section>
<!--Blog End--> 