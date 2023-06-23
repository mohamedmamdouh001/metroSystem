
<?php
session_start();
include '../config/config.php'
?>
<?php
$admin_id = $_SESSION['admin_id'];
if (isset($_POST['add'])){
    $edu_name = $_POST['edu_name'];
    $edu_pass = $_POST['edu_pass'];
    $region = $_POST['region'];
   
$sql=" INSERT INTO `education_athourity`(`name`, `password`, `region`,`admin_id`)
        VALUES('$edu_name', '$edu_pass', '$region','$admin_id')";
      mysqli_query($conn, $sql); 
      header("location:../assets/dashboardEdu.php");

}
?>
