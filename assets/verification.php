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

    <title>Verification</title>
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
                <a class="nav-link fs-4" aria-current="page" href="#">Home</a>
              </li>
            </ul>
          </div>
        </div>    
    </nav>                       
      </div>
  <!-- end navbar ------ -->
  <!-- start landing ----- -->
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 col-md-6 col-sm-12 text-center moving-card">
        <div class=" moving-card">
          <img src="sassPract/css/img/studentImg/map.png" alt="map" width="70%" class="mt-3 mb-3">
          <h1>Make your life easiar</h1>
          <p class="text-black-50">If you already have account</p>
          <button class="rounded-pill btnn">sign in</button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12  pt-5  mt-5 text-center right-side">
        <div>
          <h1>Verify your account</h1>
          <p class="text-black-50" class="pb-5">We sent verification code to your  email address</p>
          <div class="verifyForm">
<!-- there is  js code here and validiation  -->
         <form class="OTP">

            <input type="text" maxlength="1" class="otpInput" >
            <input type="text" maxlength="1" class="otpInput" >
            <input type="text" maxlength="1" class="otpInput">
            <input type="text" maxlength="1" class="otpInput">
          </form>
            <button class="rounded-pill btnn">Done</button>
          </div>
   
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