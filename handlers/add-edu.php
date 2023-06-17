
<?php
session_start();
include '../config/config.php'
?>
<?php

if (isset($_POST['add'])){
    $edu_name = $_POST['edu_name'];
    $edu_pass = $_POST['edu_pass'];
    $region = $_POST['region'];
   
$sql=" INSERT INTO `education_athourity`(`name`, `password`, `region`)
        VALUES('$edu_name', '$edu_pass', '$region')";
      mysqli_query($conn, $sql); 
      header("location:../assets/dashboardEdu.php");

}
?>
