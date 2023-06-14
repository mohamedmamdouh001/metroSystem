<?php
include '../config/config.php';
session_start();

if(empty($_SESSION['metro_id'])){
    header("location:loginAdmin.php");
}

$metro_id = $_SESSION['metro_id'];


if(isset($_GET['logout'])){
    unset($_SESSION['metro_id']);
    header("location:loginAdmin.php");
}



$sql = "SELECT * FROM `metro_office` WHERE id='$metro_id'";
$result = mysqli_query($conn, $sql);
$metro_arr = mysqli_fetch_assoc($result);



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
    <title> metro system</title>
</head>
<body>
<div class="mainWrapperMetro ">
    <!-- start sidebar  -->
    <nav id="sidebar" class="sidebar toggled bgMetro">
        <div class="sidebar-brand bgMetro" >
            <img src="sassPract/css/img/adminIcons/istanbul-metro-logo.png" class="w-25" alt="" style="filter: invert();"> ETRO
        </div>
        <div class="sidebar-content bgMetro">
            <div class="sidebar-user bgMetro">
                <img src="sassPract/css/img/adminIcons/personal-information.png " class="w-25 img-fluid rounded-circle mb-2" alt="admin">
                <div class="fw-bold text-white"><?=$metro_arr['metro_station_name']?> Station's Dashboard</div>
                <p class="text-white"> Metro Office Subscription Dashboard</p>
            </div>
            <ul class="sidebar-nav ">
                <ul>
                    <li class="sidebar-item metroActive"><a class="sidebar-link text-white" href="#">Requsets</a></li>
                </ul>

            </ul>
            <ul>
                <li class="sidebar-item mt-3 eduActive "> <form action="" method="get" > <button name="logout" class="sidebar-link text-white" style="border: 0px;" href="#">Log Out</button> </form></li>
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
      <!-- end nav bar-->
      <!-- start content  -->
   <div class="content d-flex mt-3 p-2">
    <div class="container-fluid">
<div class="header mt-5 mb-5
">
    <h1 class="header-title mb-3 ps-3 colorMetro">
        Metro System
    </h1>
   <div class="reqTypeHolder d-flex">
<h3 class="allRequsets ms-3 text-black-50 reqActive " style="cursor: pointer;">Requsets</h3>
   </div>
   <h3 class="ms-3 mt-3">
   <form action="" method="post" >
        <input type="search " placeholder=" Type to search" class="rounded-pill reqSearch" name="search" id="">
        <button type="submit" class="btn btn-success" name="search-btn" >Search</button>
        <input type="submit" class="btn btn-success" value="Reset Results" name="reset-btn" >
    </form>
</h3>
</div>
<div class="row d-flex ">
        <table class="table table-bordered ">
          <thead> <p class="fs-2 colorMetro bgMetro" > Requsets</p></thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>From</th>
              <th>To</th>
              <th>view</th>
              <th>Confirmation</th>
              <th>reject</th>
            </tr>
            <?php
                if(isset($_POST['search-btn'])){
                    $search_term = $_POST['search'];
                    $stmt = "SELECT * FROM `student`
                            INNER JOIN `reqeust`
                            ON student.student_id = reqeust.student_id
                            JOIN `metro_office` 
                            ON reqeust.metro_id = metro_office.id
                            WHERE student.full_name LIKE '%$search_term%' AND metro_office.id= '$metro_id' AND request_status  LIKE '%Accepted from Your Education Authority and you have to pay%'";
                    $result = mysqli_query($conn, $stmt);
                    while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                    <td> <?= $row['request_id'] ?> </td>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['start_station'] ?></td>
                    <td><?= $row['end_station'] ?></td>
                    <td><a href= "view.php?id=<?= $row['request_id'] ?>" class="viewBtn eduBtnn rounded-pill btn">View</a></td>
                    <td> <a href="../handlers/edu_accept.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >Accept</a></td>
                    <td> <a href="../handlers/edu_reject.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >Reject</a></td>
                  </tr>
                <?php
                    }
                }
                elseif(isset($_POST['reset-btn'])){
                    unset($_POST['search-btn']);
                    header("location:metroSystem.php");
                }
                else{
                    $stmt = "SELECT *FROM `student`
                            INNER JOIN `reqeust`
                            ON student.student_id = reqeust.student_id
                            JOIN `metro_office` 
                            ON reqeust.metro_id = metro_office.id
                            WHERE metro_office.id= '$metro_id' AND request_status  LIKE '%Accepted from Your Education Authority and you have to pay%'";
                    $result = mysqli_query($conn, $stmt);


                    while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <tr>
                            <td><?= $row['request_id'] ?></td>
                            <td><?= $row['full_name'] ?></td>
                            <td><?= $row['start_station'] ?></td>
                            <td><?= $row['end_station'] ?></td>
                            <td> <a href="view.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >View</a></td>
                            <td> <a href="../handlers/edu_accept.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >Accept</a></td>
                            <td> <a href="../handlers/edu_reject.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >Reject</a></td>

                        </tr>
            <?php
                   } 
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