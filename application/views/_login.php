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
    }

    .jumbotron {
      background-color: #ffffff;
      padding: 4rem 2rem;
      border-radius: 0.5rem;
      box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
      /* Center vertically and horizontally */
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; /* Set minimum height to full viewport height */
    }

    .display-3 {
      color: #343a40;
      font-weight: bold;
      line-height: 1.2;
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
  </style>
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold">
            E-Voting <br>
            <span class="text-primary">SISTEKIN</span>
          </h1>
          <p style="color: #6c757d;">Prodi Sistem Dan Teknologi Informasi</p>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <?php
              if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>';
              }
              if ($this->session->flashdata('success_message')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('success_message') . '</div>';
              }
              ?>
              <form action="<?= base_url() . 'admin' ?>" method="post">
                <div class="form-outline mb-4">
                  <input type="text" name="user" class="form-control" id="form3Example3">
                  <label class="form-label" for="form3Example3">Username</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="pass" class="form-control" id="form3Example4">
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
              </form>
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
</body>
</html>