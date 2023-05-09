<?php
session_start();

include '../config/config.php';
?>

<?php

if(isset($_POST['request'])){
    $user_email = $_SESSION['email'];

    $fullname = $_POST['fullname'];
    // $email = $_POST['email'];
    $national_id = $_POST['national_id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $edu_stage = $_POST['edu_stage'];
    $edu_level = $_POST['edu_level'];
    $edu_auth = $_POST['edu_auth'];
    $national_id_img = $_FILES['national_id_img']['name'];
    $personal_img = $_FILES['personal_img']['name'];
    $id_photo = $_FILES['id_photo']['name'];
    $start_station = $_POST['start_station'];
    $end_station = $_POST['end_station'];
    if(empty($user_email) && empty($national_id)){
        header("location:../assets/signup-login.php");
    }
    // $sql = "UPDATE `student` 
    //         SET `full_name`    = '$fullname',
    //             `national_id`    = '$national_id',
    //             `address`        = '$address',
    //             `edu_stage`     = '$edu_stage,
    //             `edu_level`     = '$edu_level',
    //             `edu_auth`       = '$edu_auth',
    //             `personal_img`    = '$personal_img',
    //             `identity_img`     = '$national_id_img',
    //             `start_station`     = '$start_station',
    //             `end_station`       = '$end_station'
    //         WHERE `email` = '$user_email'";

    $stmt = $conn->prepare('
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
        `personal_img` = ?,
        `identity_img` = ?,
        `id_card_img` = ?,
        `start_station` = ?,
        `end_station`  = ?
    WHERE 
        `email` = ?;
    ');
    $stmt->bind_param("sssssssssssss",$fullname, $national_id, $phone, $address, $edu_stage, $edu_level, 
                    $edu_auth, $national_id_img, $personal_img, $id_photo, $start_station, $end_station, $user_email);
    $stmt->execute();



    // mysqli_query($conn, $stmt);
    echo "done";
}