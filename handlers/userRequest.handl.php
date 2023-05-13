<?php
session_start();

include '../config/config.php';
?>

<?php

function checkType($img_ext){
    if( $img_ext !== "jpg" && $img_ext !== "jpeg" ){
        header("location:../assets/request.php");
        $_SESSION["error"] = "Please upload a photo that have .jpg or .jpeg";
        die();
    }
}

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
    $personal_img =    $_FILES['personal_img']['name'];
    $edu_id_photo =    $_FILES['edu_id_photo']['name'];
    $start_station = $_POST['start_station'];
    $end_station = $_POST['end_station'];
    if(empty($user_email) && empty($national_id)){
        header("location:../assets/signup-login.php");
        die();
    }

    //Extension of files
    $ext_1 = pathinfo($national_id_img   , PATHINFO_EXTENSION); 
    $ext_2 = pathinfo($personal_img     , PATHINFO_EXTENSION);    
    $ext_3 = pathinfo($edu_id_photo    , PATHINFO_EXTENSION);

    //Size og files
    $photoSize_1 = $_FILES['national_id_img']['size'];
    $photoSize_2 = $_FILES['personal_img']['size'];
    $photoSize_3 = $_FILES['edu_id_photo']['size'];

    checkType($ext_1);
    checkType($ext_2);
    checkType($ext_3);

    if($photoSize_1 > 5 * pow(10,6) || $photoSize_2 > 5 * pow(10,6) || $photoSize_3 > 5 * pow(10,6)){
        $_SESSION["error"] = "Please note that the documents you uploaded dosen't reach 5 MB";
        header("location:../assets/request.php");
        die();
    }
    
    $target_dir_edu = "../student_img/edu_id/";
    $target_dir_national = "../student_img/national_id/";
    $target_dir_personal = "../student_img/personal_img/";

    $target_file_edu = $target_dir_edu . basename($edu_id_photo);
    $target_file_national = $target_dir_national . basename($national_id_img);
    $target_file_personal= $target_dir_personal . basename($personal_img);

    move_uploaded_file($_FILES["edu_id_photo"]['tmp_name'], $target_file_edu);
    move_uploaded_file($_FILES["national_id_img"]["tmp_name"], $target_file_national);
    move_uploaded_file($_FILES["personal_img"]["tmp_name"], $target_file_personal);
 
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
                    $edu_auth, $near_station, $national_id_img, $personal_img, $edu_id_photo, $start_station, $end_station, $user_email);
    $stmt->execute();

   header("location:../assets/studentProfile.php");
}