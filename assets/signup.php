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
      <nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top"style="background-color: #9d9d9d;">
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
              <li class="nav-item p-2">
                <a class="nav-link fs-4" aria-current="page" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>    
    </nav>                       
      </div>
  <!-- end navbar ------ -->
  <!-- start landing ----- -->
  <div class="loginBackground">
  <div class="container ">
    <div class="row ">
      <div class="col d-flex justify-content-center align-items-center ">
 
       
        <div class="logIn-signUpForm p-3 ">
           <!-- ################done##################### ------ -->
        <form class="signUp p-3 " id="signUp" method="POST" action="../handlers/userRegister.handl.php" onSubmit=" return validateSignUp()">
          <div class="mb-3 mt-3">
            <h1 class="text-center">Join us</h1>
            <?php
            if (isset($_SESSION['error'])) {?>
              <div class="alert alert-danger" role="alert">
              <?= $_SESSION['error'] ?>
            </div>
            <?php
            unset($_SESSION['error']);
            }
            ?>
7\

            <div class="mb-3 d-flex">
              <input type="firstName" class="form-control inputStyle"placeholder="First name" id="firstNameSignUp" aria-describedby="emailHelp" name="First_name"  pattern="[A-Za-z]{3,32}">
              <input type="lastName" class="form-control inputStyle"placeholder="Last name" id="lastNameSignUp" aria-describedby="emailHelp" name="Last_name"  pattern="[A-Za-z]{3,32}">
            </div>
          <!-- Error message  -->
          <div class="mb-3">
            <input type="text" class="form-control Email inputStyle"placeholder="Email address" id="emailSignUp" aria-describedby="emailHelp" name="email" >
          </div>
          <small class="text-danger" id="emailErrorSignUp" style="display: none;" >Please enter a valid email address</small><!-- Error message  -->   
          <div class="mb-3 d-flex">
            <input type="password" class="form-control Password inputStyle" placeholder="Password" id="PasswordSignUp" name="password">
            <input type="password" class="form-control confirmPassword inputStyle" placeholder="Confirm Password" id="conPasswordSignUp" name="confirm_password">
          </div>
          <small class="text-danger" id="errorConPasswordSignUp" style="display: none;">Password does not match</small><!-- Error message  -->
       
          <div class="mb-3">
            <input type="number" class="form-control  inputStyle" placeholder="National Id" id="nationalIdSignUp"name="national_id">
          </div>
          <small class="text-danger" id="nationalIdErrorSigup" style="display: none;" >National Id must be 14 number </small><!-- Error message  -->
          <div class="mb-3 d-flex justify-content-center">
            <input type="date" class="form-control age inputStyle w-50 " placeholder="Age " id="dateSignUp" name="birthdate">
        
          <select  id="gender" name="gender">
       <option value="male">male</option>
       <option value="female">female</option>
       </select>
          </div>
          <small class="text-danger " id="requiredSignup" style="display: none;">All fields are required Please complete the form</small> <!-- Error message -->
         
        <div class="text-center"><button type="submit" class="btnn rounded-pill me-2 " name="submit">Next to create</button> </div> 
        </form>
        <!-- ###############done###################### ------ -->
        </div>
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