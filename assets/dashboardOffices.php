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

$stmt_1 = "SELECT COUNT(*) FROM `metro_office`";
$result_2 = mysqli_query($conn, $stmt_1);
$count_edu = mysqli_fetch_assoc($result_2);

$stmt_2 = "SELECT * FROM `metro_office`";
$result_3 = mysqli_query($conn, $stmt_2);
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
    <title>Admin  METRO</title>
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
                        <li class="sidebar-item "><a class="sidebar-link text-white" href="dashboardReq.php">Requests</a></li>
                        <li class="sidebar-item "><a class="sidebar-link text-white" href="dashboardEdu.php">Education</a></li>
                        <li class="sidebar-item dashLinkActive"><a class="sidebar-link"href="#">Offices</a></li>  <br>
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
   <div class=" d-flex">
<h3 class="ms-3 text-black-50"><!--from data  base--><?=$count_edu['COUNT(*)']?> Metro Stations</h3>
  <h3><button type="button" class="btn btn-primary ms-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Add
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <form action="../handlers/add-metro.php" method="post" class="eduInfo">
            <input type="text" name="metro_name" placeholder="Metro Office Name" class="eduInfoInput"> 
            <input type="text" name="metro_pass" placeholder="Enter New Password" class="eduInfoInput">
            <input type="number" min="1" max="3" name="line_num" placeholder="Line Number" class="eduInfoInput">
            <button type="submit" name="add" class="dashBtnn">Add</button>
        </form>
        </div>
        <div >
          </h3>
   </div>
   <h3 class="ms-3 mt-3">

</h3>
</div>
<div class="row d-flex ">
        <table class="table table-bordered ">
          <thead> <p class="fs-2" style="background-color: #eee;">Metro Station Data</p></thead>
            <tr>
                <th>Id</th>
                <th>Metro Office Name </th>
                <th>Line Number</th>
                <th>Delete Station</th>
            </tr>
            <?php
              while ($metro_arr = mysqli_fetch_assoc($result_3)) { ?>
              <tr>
                <td><?=$metro_arr['id']?></td>
                <td><?=$metro_arr['metro_station_name']?></td>
                <td><?=$metro_arr['line_number']?></td>
                <td><a href="../handlers/remove_metro.php?id=<?=$metro_arr['id']?>" style="text-decoration: none;" class="dashBtnn">Remove</a></td>
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
<!-- edu auth   .-->
 
