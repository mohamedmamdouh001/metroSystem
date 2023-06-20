<?php
session_start();
include '../config/config.php';
if(empty($_GET['id'])){
  header("location:educationSystem.php");
}
$request_id = $_GET['id'];
$sql ="SELECT *FROM `student`
      INNER JOIN `reqeust`
      ON student.student_id = reqeust.student_id
      JOIN `education_athourity` 
      ON reqeust.edu_id = education_athourity.id
      JOIN `metro_office`
      ON reqeust.metro_id = metro_office.id
      LEFT JOIN `payment`
      ON reqeust.request_id = payment.request_id
      WHERE reqeust.request_id = '$request_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

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
    <title>view Data</title>
</head>
<body>

<div class="main d-flex justify-content-center align-items-start  " style="background-color: #393E46;">
    <div class="container-flunted">
      <h1 class="text-center text-white"> Data Of Student</h1>
      <div class=" row m-5 viewData d-flex justify-content-center align-items-center flex-column">
  <form action="">
    <table class="text-start table viewTable table-hover table-bordered">

      </tr>
      <tr>  
        <th scope="row">Name</th>
         <td><?=$row['full_name']?></td>
      </tr>
      <tr> 
         <th scope="row ">Email</th> 
         <td><?=$row['email']?></td>
        </tr>
      <tr>  
        <th scope="row ">Gender</th>
         <td><?=$row['gender']?></td>
        </tr>
      <tr>
        <th scope="row ">BOD</th> 
          <td><?=$row['birthdate']?></td>
      </tr>
      <tr> 
         <th scope="row ">Address</th>
          <td><?=$row['address']?></td>
        </tr>
      <tr>  
        <th scope="row ">National Id</th>
         <td><?=$row['national_id']?></td>
        </tr>
      <tr>
          <th scope="row ">Education Stage</th>
           <td><?=$row['edu_stage']?></td>
          </tr>
      <tr> 
         <th scope="row ">Education Authority</th>
           <td><?=$row['edu_auth']?></td>
      </tr>
      <tr> 
         <th scope="row ">Status of the Request</th>
         <?php
          if($row['request_status'] == "Accepted from Your Education Authority and you have to pay"){ ?>
            <td><?="Accepted from the Education Authority."?></td>
          <?php
          } else{ ?>
            <td><?=$row['request_status']?></td>
          <?php
          }
         ?>

      </tr>
      <tr>  
        <th scope="row ">Nearest Station</th> 
        <td><?=$row['near_station']?></td>
      </tr>
      <tr> 
         <th scope="row ">Start Station</th>
          <td><?=$row['start_station']?></td>
        </tr>
      <tr> 
         <th scope="row ">End Station</th>
          <td><?=$row['end_station']?></td>
        </tr>
      <tr> 
         <th scope="row ">Personal image</th> 
          <td> <img src="../student_img/personal_img/<?=$row['personal_img']?> " class="w-25 img-fluid  mb-2" alt="admin"></td> 
        </tr>
      <tr> 
         <th scope="row ">Id photo</th>  
         <td> <img src="../student_img/edu_id/<?=$row['id_card_img']?> " class="w-25 img-fluid mb-2" alt="admin"></td>
        </tr>
      <tr>  
        <th scope="row ">National Id photo</th>  <td> <img src="../student_img/national_id/<?=$row['identity_img']?> " class="w-25 img-fluid  mb-2" alt="admin">
        </td>
      </tr>
      <tr>  
        <th scope="row ">Payment Method</th>
        <td>
          <?php
            if (str_contains($row['payment_method'], "jpg") || str_contains($row['payment_method'], "jpeg")) { ?>
              <img src="../payment_fawry/<?=$row['payment_method']?> " class="w-25 img-fluid  mb-2" alt="admin">
          <?php
            } else{ 
              echo "Payed by ". $row['payment_method'];
            }
          ?>
        </td>
      </tr>
      </form>
    </table>
  </form>
  </div>
      </div>
   
  
  </div>


<script src="js/all.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

    
</body>
</html>