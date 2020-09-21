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
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
  <!-- sweetalert -->
  <script src="{{ asset('assets/sweetalert/js/sweetalert.min.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/sweetalert/css/sweetalert.css') }}">
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
        <h4>{{ website('namaweb') }}</h4>
          <p>{{ website('tagline') }}</p>
          <hr>
        </div>
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ asset('login/check') }}" method="post" accept-charset="utf-8">
      {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <hr>

      <p class="text-center link-bawah">
        <a href="{{ asset('/') }}">Back to Homepage</a> | <a href="{{ asset('login/forgot') }}">Forgot password?</a>
      </p>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
<script>
@if ($message = Session::get('warning'))
// Notifikasi
swal ( "Mohon maaf" ,  "<?php echo $message ?>" ,  "warning" )
@endif

@if ($message = Session::get('sukses'))
// Notifikasi
swal ( "Berhasil" ,  "<?php echo $message ?>" ,  "success" )
@endif
</script>
</body>
</html>
