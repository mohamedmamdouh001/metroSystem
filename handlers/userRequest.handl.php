<?php
session_start();

include '../config/config.php';
?>

<?php

if(isset($_POST['request'])){ 
    $user_email = $_SESSION['email'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $national_id = $_POST['national_id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $edu_stage = $_POST['edu_stage'];
    $edu_level = $_POST['edu_level'];
    $edu_auth = $_POST['edu_auth'];
    $national_id_img = $_POST['national_id_img'];
    $personal_img = $_POST['personal_img'];
    $start_station = $_POST['start_station'];
    $end_station = $_POST['end_station'];

    $sql = "UPDATE `student` 
            SET `full_name` = '$fullname',
                `email` = '$email'.
                `national_id` = '$national_id',
                `address` = '$address',
                `edu_stage` = '$edu_stage,
                `edu_level` = '$edu_level',
                `edu_auth`= '$edu_auth ',
                `identity_id` = '$national_id_img',
                `personal_img` = '$personal_img',
                `start_station` = '$start_station',
                `end_station` = '$end_station'
            WHERE `email` = '$user_email'";
    mysqli_query($conn, $sql);
}