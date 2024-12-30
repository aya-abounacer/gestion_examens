<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <?php if(session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
  <?php endif; ?>
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  
  <!-- MDBootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
    .form-outline input {
      border: 2px solid #007bff;
      border-radius: 8px;
    }
    .form-outline input:focus {
      box-shadow: 0 0 5px #007bff;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      border-radius: 8px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
<<<<<<< HEAD
        <form method="POST" action="/login">
=======
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal fs-1 mb-0 me-3">Sign in</p>
            
          </div>
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>
>>>>>>> f2c9d10b4a3c027a362ac4a9e41e9693c37252e0
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address">
            <label class="form-label" for="form3Example3">Email address</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password">
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
<<<<<<< HEAD
          <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" onclick="window.location.href='/layout.php';">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/Signup.php" class="link-danger">Register</a></p>
=======
<<<<<<< HEAD
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
=======
            <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="Signup.php" class="link-danger">Register</a></p>
>>>>>>> f2c9d10b4a3c027a362ac4a9e41e9693c37252e0
>>>>>>> 1a0eafbaacd79187a3fd1099ef78a72fef66bb8e
          </div>
        </form>
      </div>
    </div>
  </div>

  </div>
</section>
 <!-- Bootstrap JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  
  <!-- MDBootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

</body>
</html>
