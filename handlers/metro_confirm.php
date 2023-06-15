<?php
include '../config/config.php';
session_start();

$id = $_GET['id'];

$stmt = "SELECT *FROM `student`
        INNER JOIN `reqeust`
        ON student.student_id = reqeust.student_id
        WHERE reqeust.request_id= '$id'";
$result = mysqli_query($conn, $stmt);
$row = mysqli_fetch_assoc($result);

$near_station = $row['near_station'];

$sql = "UPDATE `reqeust`
        SET `request_status` = 'You can recieve your card from $near_station Metro Station.'
        WHERE `request_id` = '$id'";
$result = mysqli_query($conn, $sql);
header("location:../assets/metroSystem.php");