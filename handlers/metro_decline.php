<?php
include '../config/config.php';
session_start();

$id = $_GET['id'];
$sql = "UPDATE `reqeust`
        SET `request_status` = 'Rejected due to existance of invalid data'
        WHERE `request_id` = '$id'";
$result = mysqli_query($conn, $sql);
header("location:../assets/educationSystem.php");