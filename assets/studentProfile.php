<?php
include "../config/config.php";
session_start();
$user_email = $_SESSION['email'];
if (empty($user_email)) {
    header("location:request.php");
}

$stmt = "SELECT *FROM `student`
        INNER JOIN `reqeust`
        ON student.student_id = reqeust.student_id
        JOIN `education_athourity` 
        ON reqeust.edu_id = education_athourity.id
        JOIN `metro_office`
        ON reqeust.metro_id = metro_office.id
        WHERE student.email= '$user_email'";
$result = mysqli_query($conn, $stmt); 
$row = mysqli_fetch_assoc($result);
if(empty($row)){
    header("location:request.php");
}
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
                <a class="nav-link fs-4" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item p-2 ">
              <?php if(!empty($_SESSION['email'])){ ?>
                <form method="get" action="">
                    <button class="profileLogOut nav-link position-relative fs-4" aria-current="page" style="border:0px; background-color: transparent;" type="submit" name="logout" style=>Log Out
                        <a class="navbar-brand" href="#">
                            <img src="sassPract/css/img/studentImg/logout (1).png" alt="" width="40" height="35" class="logoutIcon d-none d-lg-inline-block p-1 ms-2">
                        </a>
                    </button>
                </form>
              <?php }
              if(isset($_GET['logout'])){
                unset($_SESSION['email']);
                header("location:login.php");
              }
              ?> 
              </li>
            </ul>

          </div>
        </div>    
    </nav>                       
        <div class="profile mt-3 p-3">
            <div class="container">
                <div class="profileImage m-4 d-flex justify-content-center align-items-center">
                    <img src="../student_img/personal_img/<?= $row['personal_img'];?>" alt="Personal Photo" width="90" height="100">
                   </div>
                 <form class="row m-4">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <label for="fullName" class=" m-2 ms-2"> Full Name </label>
                        <br>
                        <?php
                            ?>
                        <input type="text" class="stdInput p-2 m-2 " readonly  id="fullName" value="<?=$row['full_name'] ?>" name="fullname" >
                        <br>
                        <label for="email" class=" m-2 ms-2"> Email </label>
                        <br>
                        <input type="email" class="stdInput p-2 m-2"  id="email" name="email" value="<?=$row['email']  ?>" readonly >
                        <br>
                        <label for="phoneNumber" class="m-2 ms-2"> Phone </label>
                        <br>
                        <input type="text" class="stdInput p-2 m-2" value="<?=$row['phone']?>"  id="phoneNumber" name="phone"  readonly>
                        <br>
                    </div>
                    <div class="col-sm-0 col-md-6 col-lg-4">
                        <label for="national_Id" class=" m-2 ms-2"> National ID</label>
                        <br>
                        <input type="text" class="stdInput p-2 m-2" id="national_Id" value="<?=$row['national_id'] ?>" name="national_id" readonly> 
                        <br>
                        <label for="uniName" class="m-2 ms-2"> Education Administration / University </label>
                        <br>
                        <input type="text" class="stdInput p-2 m-2"  value="<?=$row['name'] ?>" readonly>  
                        <br>
                        <label for="nearestStation" class=" m-2 ms-2"> Nearest Station </label>
                        <br>
                        <input type="text" class="stdInput p-2 m-2"  value="<?=$row['metro_station_name'] ?>" readonly>
                        <br>                   
                    </div>
                    <div class="col-sm-0 col-md-0 col-lg-4">
                        <label for="address" class=" m-2 ms-2"> Address </label>
                        <br>
                        <input type="text" class="stdInput p-2 m-2"  value="<?=$row['address'] ?>" readonly>
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
                        <td><?=$row['request_id']; ?></td>
                        <td><?=$row['full_name']; ?></td>
                        <td><?=$row['start_station']; ?></td>
                        <td><?=$row['end_station']; ?></td>
                        <td><?=$row['request_status']; ?></td>
                        <td>
                            <?php
                            if($row['request_status'] == "Under education authority review"){
                            ?>
                                <a href="../handlers/cancel.php?id=<?=$row['request_id']; ?>" class="btn btn-danger">Cancel</a>
                            <?php
                            } elseif($row['request_status'] == "Rejected due to existance of invalid data"){ ?>
                                <h5>No action needed</h5>
                            <?php
                            } elseif($row['request_status'] == "Accepted from Your Education Authority and you have to pay"){ ?>
                                <a href="payment.php?id=<?=$row['request_id']; ?>" class="btn btn-primary">Pay Fees</a>
                            <?php
                            } elseif($row['request_status'] == "Wait for Metro Office Confirmation"){ ?>
                                <h5>No action needed</h5>
                            <?php
                            }
                            ?>
                        </td>
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