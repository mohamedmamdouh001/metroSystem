
<?php
session_start();
include '../config/config.php'
?>
<?php
$admin_id = $_SESSION['admin_id'];
if (isset($_POST['add'])){
    $metro_name = $_POST['metro_name'];
    $metro_passs = $_POST['metro_pass'];
    $line_num = $_POST['line_num'];
   
$sql=" INSERT INTO `metro_office`(`metro_station_name`, `password`, `line_number`, `admin_id`)
        VALUES('$metro_name', '$metro_passs', '$line_num','$admin_id')";
      mysqli_query($conn, $sql); 
      header("location:../assets/dashboardOffices.php");

}
?>
