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
    <title>Home page</title>
</head>
<body>
    <!-- start nav bar  -->
    <div class="landing pb-5 mb-3">
    <div>
      <nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="sassPract/css/img/studentImg/istanbul-metro-logo.png" alt="" width="50" height="40" class="landingLogo d-inline-block  align-text-top ">
            </a>
          <button class="navbar-toggler  bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item p-2">
                <a class="nav-link fs-4 text-white-50 linkLanding" aria-current="page" href="signup-login.php">Log in</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link fs-4 text-white-50 linkLanding" aria-current="page" href="signup-login.php">Sign up</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
      </div>
<!-- end nav  -->
<!-- start landing  -->
<div class="container">
  <div>
<div class="row  mt-5">
  <div class="col-lg-8 col-md-6 col-sm-12 p-5">
    <h1  class="p-3 text-white-50"> <b>Get METRO subscription in a faster way</b> </h1>
    <button class="mt-3 ms-3 landingBtn rounded-pill " id="subscribeButton">Subscribe now</button>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-12">
    <img src="sassPract/css/img/studentImg/train.png" alt="" width="350" height="400" class=" train">
  </div>
</div>
</div>
</div>
</div>
<!-- end landing  -->
<!-- start featrures  -->
<div class="landingFeatures text-center bg-light">
  <div class="container">
    <div class="main-title mb-5 postion-relative">
      <h1 class=" pt-5">How to Subscribe?</h1>
    </div>
    <div class="row text-black-50">
      <div class="col-md-4 col-lg-4">
        <div class="feat mb-3">
          <div class="icon-holder postion-relative">
            <i class="fa-solid fa-1 postion-absolute fa-5x "></i>
          </div>
          <h4 class="mb-3 mt-3 text-uppercase">Enter your data</h4>
          <img class="w-50" src="sassPract/css/img/studentImg/personal-information.png" alt="">
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="feat mb-3">
          <div class="icon-holder postion-relative">
            <i class="fa-solid fa-2 postion-absolute fa-5x " ></i>
     
          </div>
          <h4 class="mb-3 mt-3 text-uppercase">Track your status</h4>
          <img class="w-50" src="sassPract/css/img/studentImg/history.png" alt="">
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="feat mb-3">
          <div class="icon-holder postion-relative">
            <i class="fa-solid fa-3 fa-5x "></i>
          </div>
          <h4 class="mb-3 mt-3 text-uppercase">then pay the fees</h4>
          <img class="w-50" src="sassPract/css/img/studentImg/money.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end featrures  -->
<!-- start footer  -->
<div class="footer pt-5 pb-5 text-white-50 text-center text-md-strat bg-black">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 text-start">
        <div class="info">
          <img src="sassPract/css/img/studentImg/istanbul-metro-logo.png " width="35" height="35" alt="" class="mb-4 landingLogo">
          <p class="mb-4 ">
            We make it easy for you to subscribe to the metro to save effort and time, and to make the process more organized.
          </p>
          <div class="copyright mb-3">
            Created by <span>BIS Students</span>
            <div>&copy;2023- <span>METRO</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 text-start">
        <div class="links">
          <h5 class="text-light">Links</h5>
          <ul class="list-unstyled lh-lg">
            <li>Home</li>
            <li>Support</li>
            <li>Terms and conditions</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 text-start">
        <div class="links">
          <h5 class="text-light">About Us</h5>
          <ul class="list-unstyled lh-lg">
            <li>Sign in</li>
            <li>Regesiter</li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 text-start">
          <div class="contact">
            <h5 class="text-light">contact Us</h5>
            <div class="lh-lg mt-3 mb-5">Get in touch with us via mail phone . we are waiting for your call or message</div>
            <a href="" class="btn rounded-bill btn-outline-danger w-100">MTERO@gmail.com</a>
            <ul class="d-flex mt-5 list-unstyled gap-3">
              <li>
                <a class="d-block text-light" href=""><i class="fa-brands fa-facebook-f rounded-circle"></i></a>
              </li>
              <li>
                <a class="d-block text-light" href=""><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a class="d-block text-light" href=""><i class="fa-brands fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- end footer  -->



  <script src="js/all.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/master.js"></script>
    
</body>
</html>