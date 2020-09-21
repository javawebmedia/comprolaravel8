<?php
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site                 = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ $title }}</title>
<!-- icon -->
<link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site->icon) }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- pace-progress -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/pace-progress/themes/black/pace-theme-flat-top.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet') }}">
  <!-- sweetalert -->
  <script src="{{ asset('assets/sweetalert/js/sweetalert.min.js') }}"></script>
  <!-- angular -->
  <script src="{{ asset('assets/angular/angular.min.js') }}"></script>  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/sweetalert/css/sweetalert.css') }}">
  <!-- jQuery -->
  <!-- <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script> -->
  <script src="{{ asset('assets/jquery-ui/external/jquery/jquery.js') }}"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script> -->
  <!-- JQUERY CHAINED -->
  <script src="{{ asset('assets/js/jquery.chained.min.js" type="text/javascript') }}"></script> 
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <link href="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js') }}"></script>
  
  <!-- Viewer js -->
  <script src="{{ asset('assets/viewerjs/pdf.js') }}"></script>
  <!-- TIMEPICKER -->
  <script src="{{ asset('assets/timepicker/timepicker.min.js') }}"></script>
  <link href="{{ asset('assets/timepicker/timepicker.min.css') }}" rel="stylesheet"/>
  <script src="{{ asset('assets/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
  <style type="text/css" media="screen">
    body {
      background-color: white !important;
    }
    .konten {
      font-size: 1em !important;
      min-height: 500px;
    }
    .btn-group-xs > .btn, .btn-xs {
      padding  : .3rem .4rem;
      font-size  : .875rem;
      line-height  : .5;
      border-radius : .2rem;
    }
    br {
      margin: 0 !important;
      padding: 0 !important;
    }
    hr.jarak {
      padding: 0;
      margin: 0;
    }
    body {
      line-height: 1em;
    }
    select[disabled]{
      color:#aaa !important;
    }
    .table th {
      vertical-align: middle !important;
      padding: 6px 12px !important;
    }
    .table td {
      padding: 6px 12px !important;
    }

    #newpost{
      display:none;
    }
    .secondpost {
      display: none;
    }
    .bold{
      font-weight:none;
    }
    .input  {
      display: block;
    }
    li.batas {
      margin: 1px 0 !important;
      padding: 0 !important;
    }
    li.batas hr {
      margin: 1px 0 !important;
      padding: 0 !important;
      border-top: solid thin #666;
    }
    h3 {
      font-size: 22px;
    }
    .bigdrop {
        /* width: 150px !important; */
        /* min-height: 50px !important; */
        font-size: 12px !important;
    }
    .ui-autocomplete {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 160px;
      padding: 5px 6px;
      margin: 2px 0 0;
      list-style: none;
      font-size: 14px;
      text-align: left;
      background-color: #F5F5F5;
      border: 1px solid #cccccc;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 4px;
      -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
      background-clip: padding-box;
    }

    .ui-autocomplete > li > div {
      display: block;
      padding: 3px 20px;
      clear: both;
      font-weight: normal;
      line-height: 1.42857143;
      color: #333333;
      white-space: nowrap;
      border-bottom: solid thin #EEE;
    }

    .ui-state-hover,
    .ui-state-active,
    .ui-state-focus {
      text-decoration: none;
      color: #262626;
      background-color: #f5f5f5;
      cursor: pointer;
    }

    .ui-helper-hidden-accessible {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
  </style>

  
</head>