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
                <a class="nav-link fs-4" aria-current="page" href="index.html">Home</a>
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
      <div class="col-lg-6 col-md-6 col-sm-12 position-relative">
        <div class=" moving-card position-absolute w-100 leftCard text-center">
          
          <img src="sassPract/css/img/studentImg/map.png" alt="map" width="70%" class="mt-3 mb-3">
          <div class="d-flex flex-column justify-content-center align-items-center">
          <h1>Make your life easiar</h1>
          <p class="text-black-50">If you already have account</p>
        <div class="rounded-pill btnn leftHand ms-7">sign in</div> 
      </div>
      </div>
 <!-- ############### sign in start ##################### ------ -->
        <div class="logIn-signUpForm ps-3 ">
          <h1 class="text-center pt-5 me-3">Welcome</h1>
        <form class="logIn  " method="post" action="../handlers/userLogin.handl.php">
          <div class="mb-3 mt-3">
            <input type="email" class="form-control Email inputStyle"placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
         
            <input type="password" class="form-control Password inputStyle" placeholder="Password" id="exampleInputPassword1" name="password">
          </div>
          
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <a href="" class="text-black-50"><h3></h3>Forget password?</h2></a>
        <div class="text-center"><button type="submit" class="btnn rounded-pill me-3 mt-5 " name="bt">Log in</button> </div> 
        </form>
      </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 position-relative">
        <div class=" moving-card position-absolute w-100 rightCard hide text-center">
          <img src="sassPract/css/img/studentImg/map.png" alt="map" width="70%" class="mt-3 mb-3">
          <div class="d-flex flex-column justify-content-center align-items-center">
          <h1>Make your life easiar</h1>
          <p class="text-black-50">If you dont have account</p>
          <div class="rounded-pill btnn rightHand">sign up</div>
        </div>
      </div>
       <!-- ###############sign in end###################### ------ -->
        <div class="logIn-signUpForm p-3 ">
           <!-- ################done##################### ------ -->
        <form class="signUp  " method="POST" action="../handlers/userRegister.handl.php">
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
            if (isset($_SESSION['success'])) {?>
              <div class="alert alert-success" role="alert">
              <?= $_SESSION['success'] ?>
            </div>
            <?php
            unset($_SESSION['success']);
            }
            ?>

            <div class="mb-3 d-flex">
              <input type="firstName" class="form-control inputStyle"placeholder="First name" id="exampleInputEmail1" aria-describedby="emailHelp" name="First_name">
              <input type="lastName" class="form-control inputStyle"placeholder="Last name" id="exampleInputEmail1" aria-describedby="emailHelp" name="Last_name">
            </div>
          <div class="mb-3">
            <input type="email" class="form-control Email inputStyle"placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
         
          </div>
          <div class="mb-3 d-flex">
            <input type="password" class="form-control Password inputStyle" placeholder="Password" id="exampleInputPassword1" name="password">
            <input type="password" class="form-control confirmPassword inputStyle" placeholder="Confirm Password" id="exampleInputPassword1" name="confirm_password">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control ssd inputStyle" placeholder="National Id" id="exampleInputPassword1"name="national_id">
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <input type="date" class="form-control age inputStyle w-50 " placeholder="Age " id="exampleInputPassword1" name="birthdate">
        
          <select  id="gender" name="gender">
       <option value="male">male</option>
       <option value="female">female</option>
       </select>
          </div>
         
        <div class="text-center"><button type="submit" class="btnn rounded-pill me-2 " name="submit">Next to create</button> </div> 
        </form>
        <!-- ###############done###################### ------ -->
        </div>
      </div>
    </div>
  </div>

<!-- end landing --------- -->

  <script src="js/all.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/master.js"></script>
    
</body>
</html>