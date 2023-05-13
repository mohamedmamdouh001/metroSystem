<?php
session_start();
$user_email = $_SESSION['email'];
if (empty($user_email)) {
    header("location:request.php");
}
include "../config/config.php";
$stmt = "SELECT * FROM `student` WHERE `email` = '$user_email'";
$result = mysqli_query($conn, $stmt); 
while ($row = mysqli_fetch_assoc($result)) {
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
    <title>profile</title>
</head>
<body>    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <!--Navigation bar -->
<div class="background">
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
              <li class="nav-item p-2 ">
              <?php if(!empty($_SESSION['email'])){ ?>
                <form method="get" action="">
                <button class="profileLogOut nav-link position-relative fs-4" aria-current="page" style="border:0px;" type="submit" name="logout">Log Out</button>
                </form>
              <?php }
              if(isset($_GET['logout'])){
                unset($_SESSION['email']);
                session_destroy();
                header("location:signup-login.php");
              }
              ?> 
              </li>
            </ul>
            <a class="navbar-brand" href="#">
                <img src="sassPract/css/img/studentImg/logout (1).png" alt="" width="40" height="35" class="logoutIcon d-none d-lg-inline-block p-1 ms-2">
            </a>
          </div>
        </div>    
    </nav>                       
        <div class="profile mt-3 p-3">
            <div class="container">
                <div class="profileImage m-4 d-flex justify-content-center align-items-center">
                    <img src="../student_img/personal_img/<?php $row['personal_img'];?>" alt="Personal Photo" width="90" height="100">
                   </div>
                 <form class="row m-4">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <label for="fullName" class=" m-2 ms-2"> Full Name </label>
                        <br>
                        <?php
                            ?>
                        <p><?=$row['full_name']; ?></p> 
                        <br>
                        <label for="email" class=" m-2 ms-2"> Email </label>
                        <br>
                        <p><?=$row['email']; ?></p> 
                        <br>
                        <label for="phoneNumber" class="m-2 ms-2"> Phone </label>
                        <br>
                        <p><?=$row['phone']; ?></p> 
                        <br>
                    </div>
                    <div class="col-sm-0 col-md-6 col-lg-4">
                        <label for="national_Id" class=" m-2 ms-2"> National ID</label>
                        <br>
                        <p><?=$row['national_id']; ?></p> 
                        <br>
                        <label for="uniName" class="m-2 ms-2"> Education Administration / University </label>
                        <br>
                        <p><?=$row['edu_auth']; ?></p> 
                        <br>
                        <label for="nearestStation" class=" m-2 ms-2"> Nearest Station </label>
                        <br>
                        <p><?=$row['near_station']; ?></p> 
                        <br>                   
                    </div>
                    <div class="col-sm-0 col-md-0 col-lg-4">
                        <label for="address" class=" m-2 ms-2"> Address </label>
                        <br>
                        <p><?=$row['address'] ?></p> 
                    </div>
                </form>    
            </div>
        </div>
      
        <div class="requestProfile mt-3 p-3 ms-4">
            <div class="container">
                <h3>Request</h3>
                <div class="table-responsive">
                <table class="table text-center table-borderless statueTable mt-4">
                   <thead>
                    <tr> 
                        <th class="p-3"> ID </th>
                        <th class="p-3"> Name </th>
                        <th class="p-3"> From </th>
                        <th class="p-3"> To </th>
                        <th class="p-3"> Status </th>
                        <th class="p-3"> Action </th>
                    </tr>
                   </thead>
                   <tr>
                        <td><?=$row['student_id']; ?></td>
                        <td><?=$row['full_name']; ?></td>
                        <td><?=$row['start_station']; ?></td>
                        <td><?=$row['end_station']; ?></td>
                        <td><?=$row['request_status']; }?></td>
                        <td></td>
                   </tr>
                  </table>
                </div> 
            </div>         
        </div>     
</div>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/master.js"></script>
</body>
</html>