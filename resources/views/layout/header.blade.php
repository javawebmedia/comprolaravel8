<?php 
$site_config = DB::table('konfigurasi')->first();
?>
<div class="wrapper home3">
   <!--Header Start-->
   <header class="header-style-3 wf100">
      <div class="topbar">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <p><i class="fas fa-map-marker-alt"></i> Selamat datang di {{ $site_config->namaweb }}</p>
               </div>
               <div class="col-md-6">
                  <ul class="topbar-social">
                     <li class="social-links"> 
                        <a href="{{ $site_config->twitter }}"><i class="fab fa-twitter"></i></a> 
                        <a href="{{ $site_config->facebook }}"><i class="fab fa-facebook"></i></a> 
                        <a href="{{ $site_config->instagram }}"><i class="fab fa-instagram"></i></a> 
                     </li>
                     <li> <a class="acclink" href="{{ 'login' }}">Login</a> </li>                     
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="h3-logo-row">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  <div class="logo"><a href="{{ asset('/') }}"><img src="{{ asset('assets/upload/image/'.$site_config->logo) }}" alt="{{ $site_config->namaweb }}" style="max-height: 80px; width: auto;"></a></div>
               </div>
               
               <div class="col-md-6 col-sm-12">
                  <ul class="header-contact">
                     <li><i class="fas fa-phone"></i> {{ $site_config->telepon }}</li>
                     <li><i class="fas fa-envelope"></i> {{ $site_config->email }}</li>
                  </ul>
               </div>
            </div>
         </div>
      </div><div class="navrow">
<div class="container">