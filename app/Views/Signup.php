<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include FontAwesome (optional for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color: white;"> 
<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>


                <form action="/Signup" method="post">
    <?= csrf_field() ?>

    <!-- Student Name -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="studentName">Student Name</label>
            <input type="text" id="studentName" name="studentName" class="form-control" placeholder="Enter your name" />
        </div>
    </div>

    <!-- Email Address -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input type="email" id="emailAddress" name="emailAddress" class="form-control" placeholder="Enter your email" />
        </div>
    </div>

    <!-- Date of Birth -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-calendar-alt fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="dateOfBirth">Date of Birth</label>
            <input type="date" id="dateOfBirth" name="dateOfBirth" class="form-control" />
        </div>
    </div>

    <!-- Level -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-graduation-cap fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="level">Level</label>
            <input type="text" id="level" name="level" class="form-control" placeholder="Enter your level" />
        </div>
    </div>

    <!-- Section -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-users fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="section">Section</label>
            <input type="text" id="section" name="section" class="form-control" placeholder="Enter your section" />
        </div>
    </div>

    <!-- Role -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-user-tag fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="role">Role</label>
            <select id="role" name="role" class="form-control" required>
                <option value="student">Student</option>
                <option value="professor">Professor</option>
                <option value="admin">Admin</option>
            </select>
        </div>
    </div>

    <!-- Username -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-user-circle fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" />
        </div>
    </div>

    <!-- Password -->
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" />
        </div>
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="btn btn-primary btn-lg">Register</button>
    </div>
</form>




              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Include Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
