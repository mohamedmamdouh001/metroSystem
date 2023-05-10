<?php
session_start();

include '../config/config.php';
?>

<?php

if(isset($_POST['request'])){
    $user_email = $_SESSION['email'];

    $fullname = $_POST['fullname'];
    $national_id = $_POST['national_id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $edu_stage = $_POST['edu_stage'];
    $edu_level = $_POST['edu_level'];
    $edu_auth = $_POST['edu_auth'];
    $near_station = $_POST['near_station'];
    $national_id_img = $_FILES['national_id_img']['name'];
    $personal_img = $_FILES['personal_img']['name'];
    $id_photo = $_FILES['id_photo']['name'];
    $start_station = $_POST['start_station'];
    $end_station = $_POST['end_station'];
    if(empty($user_email) && empty($national_id)){
        header("location:../assets/signup-login.php");
    }

    $stmt = $conn->prepare("
    UPDATE
        `student` 
    SET
        `full_name` = ?,
        `national_id` = ?,
        `phone` = ?,
        `address` = ?,
        `edu_stage` = ?, 
        `edu_level` = ?,  
        `edu_auth` = ?,
        `near_station` = ?,
        `personal_img` = ?,
        `identity_img` = ?,
        `id_card_img` = ?,
        `start_station` = ?,
        `end_station`  = ?
    WHERE 
        `email` = ?;
    ");
    $stmt->bind_param("ssssssssssssss",$fullname, $national_id, $phone, $address, $edu_stage, $edu_level, 
                    $edu_auth, $near_station, $national_id_img, $personal_img, $id_photo, $start_station, $end_station, $user_email);
    $stmt->execute();

   header("location:../assets/studentProfile.php");
}