<?php
include '../config/config.php';
session_start();

if(empty($_SESSION['admin_id'])){
    header("location:loginAdmin.php");
}

$admin_id = $_SESSION['admin_id'];


if(isset($_GET['logout'])){
    unset($_SESSION['admin_id']);
    header("location:loginAdmin.php");
}

$sql = "SELECT * FROM `admin` WHERE id='$admin_id'";
$result_1 = mysqli_query($conn, $sql);
$admin_arr = mysqli_fetch_assoc($result_1);

$stmt_1 = "SELECT COUNT(request_id) FROM `reqeust`";
$result_2 = mysqli_query($conn, $stmt_1);
$req_arr = mysqli_fetch_assoc($result_2);

$stmt_2 = "SELECT COUNT(student_id) FROM `student`";
$result_3 = mysqli_query($conn, $stmt_2);
$stu_arr = mysqli_fetch_assoc($result_3);

$stmt_3 = " SELECT * FROM `student`
            INNER JOIN `reqeust`
            ON student.student_id = reqeust.student_id
            ORDER BY `request_id` DESC
            LIMIT 5";
$result_4 = mysqli_query($conn, $stmt_3);

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
    <title>Dashborad</title>
</head>
<body>
<div class="mainWrapper">
    <!-- start sidebar  -->
    <nav id="sidebar" class="sidebar toggled">
        <div class="sidebar-brand" >
            <img src="sassPract/css/img/adminIcons/istanbul-metro-logo.png" style="filter: invert();" class="w-25" alt=""> ETRO
        </div>
        <div class="sidebar-content">
            <div class="sidebar-user">
                <img src="sassPract/css/img/adminIcons/personal-information.png " class="w-25 img-fluid rounded-circle mb-2" alt="admin" >
                <div class="fw-bold"><?=$admin_arr['admin_name']?></div>
                <p>Admin's Dashboard</p>
            </div>

            <ul class="sidebar-nav">
                    <ul>
                        <li class="sidebar-item dashLinkActive"><a class="sidebar-link text-white" href="#">Dashboard</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white" href="dashboardReq.php">Requests</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white" href="dashboardEdu.php">Education</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white" href="dashboardOffices.php">Offices</a></li> <br>
                        <li class="sidebar-item"><form action="" method="get"><button name="logout" class="sidebar-link text-white" style="border: 0px;" >Log Out</button></form></li>
                    </ul>
            </ul>
        </div>
    </nav>
    <!-- end side bar  -->
<!-- start main  -->
<!-- start  nav bar  -->
<div class="main d-flex  flex-column bg-light ">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top">
            <a class=" d-flex me-2 sidebar-toggle">
                <i class="fa-sharp fa-solid fa-bars fa-2x " style="color: white; cursor: pointer;"></i>
            </a>
            </div>
          
      </nav>        
      <!-- end nav bar                 -->
      <!-- start content  -->
   <div class="content d-flex mt-5 p-2">
    <div class="container-fluid">

<div class="row d-flex ">
<div class="col-lg-8 col-lg-8 col-sm-12">

    <div class="row">
    <div class="col">
    <div class="card mb-3  " style="width: 100%; background-color: #2a5677;">
        <div class="card-body">
          <h5 class="card-title">Requests</h5>
          <p class="card-text">Total requests from all education authorities is <b> <?=$req_arr['COUNT(request_id)']?> requests.</b></p>
        </div>
      </div>
    </div>
<!-- nng  -->
<div class="col">
    <div class="card mb-3  " style="width: 100%; background-color: #3e8bb3;">
        <div class="card-body">
          <h5 class="card-title">Students</h5>
          <p class="card-text">Total students from all Education Authorities is <b> <?=$stu_arr['COUNT(student_id)']?> requests.</p>
        </div>
    </div>
    </div>
</div>

</div>

<div class="row secondPart">
    <div class="col-lg-8 col-sm-12 col-md-8">
        <table class="table table-bordered ">
          <thead> <p class="fs-2" style="background-color:#2062a4;"> Recent Requsets</p></thead>
            <tr>
              <th>Request Id</th>
              <th>Name</th>
              <th>From</th>
              <th>To</th>
              <th>Status</th>
            </tr>
        <?php
            while ($recent_req = mysqli_fetch_assoc($result_4)) { ?>
            <tr>
              <td><?=$recent_req['request_id']?></td>
              <td><?=$recent_req['full_name']?></td>
              <td><?=$recent_req['start_station']?></td>
              <td><?=$recent_req['end_station']?></td>
              <td><?=$recent_req['request_status']?></td>
            </tr>
        <?php  
            }
        ?>
       
          </table>
    </div>
 

</div>

    </div>
   </div>
        </div>
    </div>   
</div>



<!-- end main  -->


</div>

<script src="js/all.min.js"></script>
<script src="js/dashborad.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

    
</body>
</html>