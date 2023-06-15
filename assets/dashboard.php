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
                <div class="fw-bold">admin name</div>
                <p>admin</p>
            </div>

            <ul class="sidebar-nav">
                    <ul>
                        <li class="sidebar-item dashLinkActive"><a class="sidebar-link text-white" href="#">Dashboard</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white" href="dashboardReq.php">Requests</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white" href="dashboardStd.php">Students</a></li>
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
          <h5 class="card-title">Requsets</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
<!-- nng  -->
<div class="col">
    <div class="card mb-3  " style="width: 100%; background-color: #3e8bb3;">
        <div class="card-body">
          <h5 class="card-title">students</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
    </div>
</div>

</div>
<div class="col-lg-4 col-lg-4 col-sm-12">
    <div class="col">
        <img class="calender ps-3" src="sassPract/css/img/adminIcons/calender.png" alt="calender">
    </div>
   
</div>
<div class="row secondPart">
    <div class="col-lg-8 col-sm-12 col-md-8">
        <table class="table table-bordered ">
          <thead> <p class="fs-2" style="background-color:#2062a4;"> Recent Requsets</p></thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>From</th>
              <th>To</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>1920011</td>
              <td>Ahmed</td>
              <td>Giza</td>
              <td>helwan</td>
              <td>accepted</td>
            </tr>
            <tr>
              <td>1920011</td>
              <td>Ahmed</td>
              <td>Giza</td>
              <td>helwan</td>
              <td>accepted</td>
            </tr>
            <tr>
              <td>1920011</td>
              <td>Ahmed</td>
              <td>Giza</td>
              <td>helwan</td>
              <td>accepted</td>
            </tr>
       
          </table>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="col text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-header" style="background-color: #2062a4;">
                 New students
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
              </div>
        </div>
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