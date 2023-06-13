<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="sassPract/css/normalize.css">
          <link rel="stylesheet" href="sassPract/css/all.min.css">
          <link rel="stylesheet" href="sassPract/css/bootstrap.min.css">
          <link rel="stylesheet" href="sassPract/css/main.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
          <title>login Admin</title>
      </head>
  <body>

    <!----->
    <div class="backgroundLoginAdmin">
  
    <div class="container h-100 mt-3">
      <div class="row  h-100 justify-content-center align-items-center">
        <form class="col-md-10 " action="../handlers/adminLogin.handl.php" method="post">
          <div class="AppForm shadow-lg ">
            <div class="row">
              <div
                class="col-md-6 d-flex justify-content-center align-items-center"
              >
                <div class="AppFormLefti">
                  <h1 class=" text-center text-white-50 p-3 ">Login</h1>
                  <?php
                  if (isset($_SESSION['error'])) {?>
                  <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['error'] ?>
                  </div>
                  <?php
                  unset($_SESSION['error']);
                  }?>
                  <div class="form-group position-relative mb-4">
                    <input
                      type="text"
                      class="form-control "
                      id="username"
                      placeholder="Your ID"
                      name="id"
                    />
                  </div>
                  <div class="form-group position-relative mb-4">
                    <input
                      type="password"
                      class="form-control "
                      id="password"
                      placeholder="Your Password"
                      name="password"
                    />
                  </div>
                  <div class="row mt-4 mb-1">
                    <div class="col-md-6"></div>
                  </div>
                  <div class="form-check pb-1">
                    <input class="form-check-input" type="radio" name="role" id="role" value="system_admin" checked >
                    <label class="form-check-label" for="role">
                      Admin
                    </label>
                  </div>
                  <div class="form-check pb-1">
                    <input class="form-check-input" type="radio" name="role" id="role" value="education_admin">
                    <label class="form-check-label" for="role">
                     Education Authority
                    </label>
                  </div>
                  <div class="form-check pb-1">
                    <input class="form-check-input" type="radio" name="role" id="role" value="metro_admin" >
                    <label class="form-check-label" for="role">
                     Metro Station Office
                    </label>
                  </div>
                  <button
                    class=" mb-5 mt-4 btn w-100 btnAdminLogin text-white-50 text-uppercase" type="submit" name="login" >
                  
                    Login
                  </button>
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white"
                >
                  <h2 class="position-relative px-4 pb-3 mb-4">Welcome</h2>
                  <p><i>Login To Your Moderator System</i></p>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>
</html>
