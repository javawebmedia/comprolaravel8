<?php 
$bg   = DB::table('heading')->where('halaman','Kontak')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End--> 
<!--Contact Start-->
<section class="contact-page wf100 p50">
   <div class="container contact-info">
      <div class="row">
         <!--Contact Info Start-->
         <div class="col-md-6">
            <div class="c-info">
               <h6>Alamat:</h6>
               <p>
                <strong><?php echo $site_config->namaweb ?></strong>
                <br><?php echo nl2br($site_config->alamat) ?>
              </p>
            </div>
         </div>
         <!--Contact Info End--> 
         <!--Contact Info Start-->
         <div class="col-md-6">
            <div class="c-info">
               <h6>Kontak:</h6>
               <p>Telepon: <?php echo $site_config->telepon ?>
                <br>Email: <?php echo $site_config->email ?>
                <br>Website: <?php echo $site_config->website ?></p>
            </div>
         </div>
         <!--Contact Info End--> 
         
      </div>
      <br><br>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="contact-form">
               <ul class="cform">
                  <li class="half pr-15">
                     <input type="text" class="form-control" placeholder="Full Name">
                  </li>
                  <li class="half pl-15">
                     <input type="text" class="form-control" placeholder="Email">
                  </li>
                  <li class="half pr-15">
                     <input type="text" class="form-control" placeholder="Contact">
                  </li>
                  <li class="half pl-15">
                     <input type="text" class="form-control" placeholder="Subject">
                  </li>
                  <li class="full">
                     <textarea class="textarea-control" placeholder="Message"></textarea>
                  </li>
                  <li class="full">
                     <input type="submit" value="Contact us" class="btn btn-info btn-lg btn-block">
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="google-map">
               <?php echo $site_config->google_map ?>
            </div>
         </div>
      </div>
   </div>
   <br><br>
</section>
<!--Contact End--> 