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

    <title>Metro For Students</title>
</head>
<body>
  
    <!-- start nav bar  -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="sassPract/css/img/studentImg/istanbul-metro-logo.png" alt="" width="50" height="40" class="d-inline-block align-text-top ">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item p-2">
                <a class="nav-link fs-4" aria-current="page" href="index.php">Home</a>
              </li>
            </ul>
          </div>
        </div>    
    </nav>                       
      </div>
  <!-- end navbar ------ -->
  <!-- start landing ----- -->
  <div class="container ">
    <div class="row ">
      <div class="col d-flex justify-content-center align-items-center p-3 ">
       
 <!-- ############### sign in start ##################### ------ -->
        <div class="logIn-signUpForm ps-3  " style="width: 500px;">
          <h1 class="text-center pt-5 me-3">Welcome</h1>
        <form class="logIn  " method="post" action="../handlers/userLogin.handl.php" onSubmit="return validateLogIn()">
        <?php
            if (isset($_SESSION['error'])) {?>
              <div class="alert alert-danger" role="alert">
              <?= $_SESSION['error'] ?>
            </div>
            <?php
            unset($_SESSION['error']);
            }
            ?>
          <div class="mb-3 mt-3">
            <input type="text" class="form-control Email inputStyle"placeholder="Email address" id="emailLogIn" aria-describedby="emailHelp"name="email" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
         
            <input type="password" class="form-control Password inputStyle" placeholder="Password" id="passwordLogIn" name="password">
          </div>
          <small id="requiredLogIn" class="text-danger" style="display: none;" >All fields are required Please complete the form</small>
          
       
          <a href="" class="text-black-50"><h3></h3>Forget password?</h2></a>
        <div class="text-center"><button type="submit" class="btnn rounded-pill me-3 mt-5 " name="bt">Log in</button> </div> 
        </form>
      </div>
      </div>
   
    </div>
  </div>

<!-- end landing --------- -->

  <script src="js/all.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/master.js"></script>
  <script src="js/validationSignup.js"></script>
  <script src="js/validationLogIn.js"></script>
    
</body>
</html>