<?php
require_once("../config/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM `metro_office` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);
header("Location:../assets/dashboardOffices.php");