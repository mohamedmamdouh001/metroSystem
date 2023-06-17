<?php
require_once("../config/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM `education_athourity` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);
header("Location:../assets/dashboardEdu.php");