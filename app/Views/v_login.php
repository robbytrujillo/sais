
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAIS | <?= $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style="border-radius: 5%">
    <div class="card-header text-center">
      <!-- <img src="https://elearning.ihbs.sch.id:2024/pluginfile.php/1/theme_eguru/logo/1657637941/LOGO2.png" width="200px" height="70px"> -->
      <a href="<?= base_url('') ?>" class="h1"><b>Siakad</b>School</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Login</p>

      <!-- <form action="<?= base_url('AdminLTE') ?>/index3.html" method="post"> -->
      <?php echo form_open('Auth/Login') ?>
        <div class="input-group mb-3">
          <input name="username" class="form-control" placeholder="Username/NISN/NIP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="level" class="form-control">
            <option value="">--Level--</option>
            <option value="1">Admin</option>
            <option value="2">Guru</option>
            <option value="3">Wali Kelas</option>
            <option value="4">Siswa</option>
          </select> 
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close() ?>  


      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
