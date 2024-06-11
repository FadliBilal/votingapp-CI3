<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Voting | Komting</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>plugins/iCheck/square/blue.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="panel-body">
      <?php
      if ($this->session->flashdata('message')) {
      ?>
        <div class="alert alert-danger">
          <?php
          echo $this->session->flashdata('message');
          ?>
        </div>
      <?php
      }

      if ($this->session->flashdata('success_message')) {
      ?>
        <div class="alert alert-success">
          <?php
          echo $this->session->flashdata('success_message');
          ?>
        </div>
      <?php
      }
      ?>
      <div class="login-logo">
        <a href="<?= site_url() . '/adminweb' ?>"><b>SISTEKIN VOTE</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masukkan Data untuk Login</p>
        <form action="<?= base_url() . 'admin' ?>" method="post">
          <div class="form-group has-feedback">
            <input name="user" type="text" class="form-control" placeholder="User ID">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="pass" type="password" class="form-control" placeholder="Password">
            <span class="fa fa-key form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <div class="col-md-12">
              <button name="login" type="submit" class="btn btn-warning btn-block btn-flat"><i class="fa fa-sign-in"></i> Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="<?= base_url() . 'assets/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?= base_url() . 'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() . 'assets/' ?>plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>

</html>