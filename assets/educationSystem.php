<?php
include '../config/config.php';
session_start();

if(empty($_SESSION['education_id'])){
    header("location:loginAdmin.php");
}

$education_id = $_SESSION['education_id'];


if(isset($_GET['logout'])){
    unset($_SESSION['education_id']);
    header("location:loginAdmin.php");
}



$sql = "SELECT * FROM `education_athourity` WHERE id='$education_id'";
$result = mysqli_query($conn, $sql);
$edu_arr = mysqli_fetch_assoc($result);



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
    <title> Education system</title>
</head>
<body>
<div class="mainWrapperEdu">
    <!-- start sidebar  --> 
    <nav id="sidebar" class="sidebar toggled bgEdu">
        <div class="sidebar-brand bgEdu" >
            <img src="sassPract/css/img/adminIcons/istanbul-metro-logo.png" class="w-25" alt="" style="filter: invert();"> ETRO
        </div>
        <div class="sidebar-content bgEdu">
            <div class="sidebar-user bgEdu">
                <img src="sassPract/css/img/adminIcons/personal-information.png " class="w-25 img-fluid rounded-circle mb-2" alt="admin">
                <div class="fw-bold text-white"><?=$edu_arr['name'] ?>'s Dashboard</div>
                <p class="text-white">Education Authority Dashboard</p>
            </div>

            <ul class="sidebar-nav p-3">
                    <ul>
                        <li class="sidebar-item eduActive  ps-3 "><a class="sidebar-link text-white " href="#">Requsets</a></li>
                        <li class="sidebar-item mt-3 eduActive  ps-3"> <form action="" method="get" > <button name="logout" class="sidebar-link text-white" style="border: 0px;" href="#">Log Out</button> </form></li>
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
    <h1 class="header-title mb-3 ps-3 colorEdu">
        Education System
    </h1>
   <div class="reqTypeHolder d-flex">
<h3 class="allRequsets ms-3 text-black-50 reqActive" style="cursor: pointer;">Requsets</h3>
   </div>
   <h4 class="ms-3 mt-3">
    <form action="" method="post" >
        <input type="search " placeholder=" Type to search" class="rounded-pill reqSearch" name="search" id="">
        <button type="submit" class="viewBtn eduBtnn rounded-pill btn " name="search-btn" >Search</button>
        <input type="submit" class="viewBtn eduBtnn rounded-pill btn " value="Reset Results" name="reset-btn" >
    </form>
</h4>
</div>
<div class="row d-flex ">
        <table class="table table-bordered ">
          <thead> <p class="fs-2 bgEdu colorEdu" >Requsets</p></thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Education Authority</th>
              <th>From</th>
              <th>To</th>
              <th>Status</th>
              <th>View Full Information</th>
              <th>Accept</th>
              <th>Reject</th>
            </tr>
            <?php
                if(isset($_POST['search-btn'])){
                    $search_term = $_POST['search'];
                    $stmt = "SELECT * FROM `student`
                            INNER JOIN `reqeust`
                            ON student.student_id = reqeust.student_id
                            JOIN `education_athourity` 
                            ON reqeust.edu_id = education_athourity.id
                            WHERE student.full_name LIKE '%$search_term%' AND request_status  LIKE '%Under education authority review%'  AND education_athourity.id= '$education_id'";
                    $result = mysqli_query($conn, $stmt);
                    while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                    <td> <?= $row['request_id'] ?> </td>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['start_station'] ?></td>
                    <td><?= $row['end_station'] ?></td>
                    <td><?= $row['request_status'] ?></td>
                    <td><a href= "view.php?id=<?= $row['request_id'] ?>" class="viewBtn eduBtnn rounded-pill btn">View</a></td>
                    <td> <a href="../handlers/edu_accept.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >Accept</a></td>
                    <td> <a href="../handlers/edu_reject.php?id=<?= $row['request_id']?>" class="viewBtn eduBtnn rounded-pill btn" >Reject</a></td>
                  </tr>
                <?php
                    }
                }
                elseif(isset($_POST['reset-btn'])){
                    unset($_POST['search-btn']);
                    header("location:educationSystem.php");
                }
                else{
                    $stmt = "SELECT *FROM `student`
                            INNER JOIN `reqeust`
                            ON student.student_id = reqeust.student_id
                            JOIN `education_athourity` 
                            ON reqeust.edu_id = education_athourity.id
                            WHERE education_athourity.id= '$education_id' AND request_status  LIKE '%Under education authority review%' ";
                    $result = mysqli_query($conn, $stmt);


                    while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <tr>
                            <td><?= $row['request_id'] ?></td>
                            <td><?= $row['full_name'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['start_station'] ?></td>
                            <td><?= $row['end_station'] ?></td>
                            <td><?= $row['request_status'] ?></td>
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