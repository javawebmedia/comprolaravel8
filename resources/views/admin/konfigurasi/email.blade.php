@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/konfigurasi/proses_email') }}" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_konfigurasi" value="<?php echo $site->id_konfigurasi ?>">

<div class="row form-group">
  <label class="col-md-3 text-right">Protocol Email</label>
  <div class="col-md-9">
    <input type="text" name="protocol" placeholder="Protocol Email" value="<?php echo $site->protocol ?>" required class="form-control">
</div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">SMTP Host</label>
  <div class="col-md-9">
    <input type="text" name="smtp_host" placeholder="SMTP Host" value="<?php echo $site->smtp_host ?>" class="form-control">
</div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">SMTP Port</label>
  <div class="col-md-9">
    <input type="number" name="smtp_port" placeholder="SMTP Port" value="<?php echo $site->smtp_port ?>" class="form-control">
</div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">SMTP Timeout</label>
  <div class="col-md-9">
    <input type="number" name="smtp_timeout" placeholder="SMTP Timeout" value="<?php echo $site->smtp_timeout ?>" class="form-control" required>
</div>
</div>


<div class="row form-group">
  <label class="col-md-3 text-right">SMTP Username (Email)</label>
  <div class="col-md-9">
    <input type="email" name="smtp_user" placeholder="SMTP User" value="<?php echo $site->smtp_user ?>" class="form-control">
</div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right">SMTP Password</label>
  <div class="col-md-9">
    <input type="text" name="smtp_pass" placeholder="SMTP Password" value="<?php echo $site->smtp_pass ?>" class="form-control">
</div>
</div>

<div class="row form-group">
  <label class="col-md-3 text-right"></label>
  <div class="col-md-9">
    <input type="submit" name="submit" value="Save Configuration" class="btn btn-success btn-lg">
    <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-lg">
</div>
</div>
</form>

