<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" href="{{ asset('assets/upload/image/'.website('icon')) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    	<div class="login-logo">
		    <a href="{{ '/' }}" style="color: orange;">
            <img src="{{ asset('assets/upload/image/'.website('logo')) }}" class="img img-responsive" style="width: auto; max-width: 50%;">
        </a>
		  </div>
      <div class="text-center">
          <hr>
        <h4>SISTEM INFORMASI PEGAWAI RSUI</h4>
          <p>SISTEM INFORMASI PETA KOMPETENSI (SIMRSUI)</p>
          <hr>
        </div>
      <p class="login-box-msg">Lupa password? Masukkan alamat email Anda.<br>Atau hubungi Administrator website kami.</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-key"></i> Reset Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <hr>

      <p class="text-center link-bawah">
        <a href="{{ asset('/') }}">Back to Homepage</a> | <a href="{{ asset('login') }}">Login</a>
      </p>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
