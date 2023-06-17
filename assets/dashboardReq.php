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
$result = mysqli_query($conn, $sql);
$admin_arr = mysqli_fetch_assoc($result);

$stmt_1 = " SELECT * FROM `student`
            INNER JOIN `reqeust`
            ON student.student_id = reqeust.student_id";
$result_2 = mysqli_query($conn, $stmt_1);



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
    <title> Admin requests</title>
</head>
<body>
<div class="mainWrapper mainWrapperReq">
    <!-- start sidebar  -->
    <nav id="sidebar" class="sidebar toggled">
        <div class="sidebar-brand" >
            <img src="sassPract/css/img/adminIcons/istanbul-metro-logo.png" style="filter: invert();" class="w-25" alt=""> ETRO
        </div>
        <div class="sidebar-content">
            <div class="sidebar-user">
                <img src="sassPract/css/img/adminIcons/personal-information.png " class="w-25 img-fluid rounded-circle mb-2" alt="admin">
                <div class="fw-bold"><?=$admin_arr['admin_name']?></div>
                <p>Admin's Dashboard</p>
            </div>

            <ul class="sidebar-nav ">
                    <ul>
                        <li class="sidebar-item "><a class="sidebar-link text-white" href="dashboard.php">Dashboard</a></li>
                        <li class="sidebar-item dashLinkActive"><a class="sidebar-link text-white" href="#">Requests</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white" href="dashboardEdu.php">Education</a></li>
                        <li class="sidebar-item"><a class="sidebar-link text-white"href="dashboardOffices.php">Offices</a></li>  <br>
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
   <div class="content d-flex mt-3 p-2">
    <div class="container-fluid">
<div class="header mt-5 mb-5
">
    <h1 class="header-title mb-3 ps-3">
        Welcome Back, <?=$admin_arr['admin_name']?>
    </h1>
   <div class="reqTypeHolder d-flex">
<h3 class="allRequsets ms-3 text-black-50 reqActive" style="cursor: pointer;">Requsets</h3>
   </div>

</div>
<div class="row d-flex ">
        <table class="table table-bordered ">
          <thead> <p class="fs-2" style="background-color: #eee;">  Requsets</p></thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>From</th>
              <th>To</th>
              <th>Status</th>
              <th>view</th>
              <th>Delete</th>
            </tr>
            <?php
                while ($req_arr = mysqli_fetch_assoc($result_2)) { ?>
                    <tr>
                        <td><?=$req_arr['request_id']?></td>
                        <td><?=$req_arr['full_name']?></td>
                        <td><?=$req_arr['start_station']?></td>
                        <td><?=$req_arr['end_station']?></td>
                        <td><?=$req_arr['request_status']?></td>
                        <td><a href="view.php?id=<?= $req_arr['request_id'] ?>" style="text-decoration: none;" class="viewBtn dashBtnn rounded-pill ">View</a></td>
                        <td><a href="../handlers/cancel-metro.php?id=<?= $req_arr['request_id'] ?>" style="text-decoration: none;" class="deleteBtn dashBtnn rounded-pill ">Delete</a> </td>
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