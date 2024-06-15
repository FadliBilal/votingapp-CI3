<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Voting | Komting</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
      background: url('<?= base_url('assets/images/bg voting.jpg') ?>') no-repeat center center fixed;
      background-size: cover;
    }

    .jumbotron {
      background-color: rgba(255, 255, 255, 0.85); /* Semi-transparent white background */
      padding: 2rem 1rem;
      border-radius: 0.5rem;
      box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .display-4 {
      color: #343a40;
      font-weight: bold;
      line-height: 1.2;
      font-size: 4rem;
    }

    .text-primary {
      color: #007bff;
    }

    .form-outline {
      position: relative;
    }

    .form-outline input.form-control {
      padding: 1.2rem 1rem;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      background-color: #ffffff;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-outline input.form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .prodi-text {
      margin-top: -1rem;
      color: #6c757d;
      font-size: 1.5rem;
    }

    .card-body {
      padding: 2rem;
    }

    .alert {
      margin-bottom: 1rem;
    }

    .contact-admin {
      margin-top: 1rem;
      font-size: 0.9rem;
      text-align: center;
    }

    .contact-admin a {
      color: #007bff;
      text-decoration: none;
    }

    .contact-admin a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-left">
          <h1 class="my-4 display-4 fw-bold">
            E-Voting <br>
            <span class="text-primary">SISTEKIN</span>
          </h1>
          <p class="prodi-text"><strong>Prodi Sistem Dan Teknologi Informasi</strong></p>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <?php
              if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>';
              }
              if ($this->session->flashdata('success_message')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('success_message') . '</div>';
              }
              ?>
              <form action="<?= base_url('admin') ?>" method="post">
                <div class="form-group">
                  <h4 class="text-center mb-4"><strong>LOGIN | SISTEM E-VOTING</strong></h4>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="user" class="form-control" id="username" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group">
                    <input type="password" name="pass" class="form-control" id="password" placeholder="Masukkan Password" required>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fa fa-eye-slash"></i></button>
                    </div>
                  </div>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
              </form>
              <p class="contact-admin">Jika kamu ada kendala, mohon <a href="https://wa.me/6285339333616" target="_blank">kontak admin</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and FontAwesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

  <script>
    // Script to toggle password visibility
    $('#togglePassword').click(function(){
      const passwordField = $('#password');
      const fieldType = passwordField.attr('type') === 'password' ? 'text' : 'password';
      passwordField.attr('type', fieldType);
      $(this).find('i').toggleClass('fa-eye fa-eye-slash');
    });
  </script>
</body>
</html>