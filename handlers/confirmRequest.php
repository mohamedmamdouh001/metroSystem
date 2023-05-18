<?php
include '../config/config.php';
session_start();
if (isset($_POST['confirm'])) {
    $accepted_request = "Aceepted";
    $student_id = $_SESSION['student_id'];
    $sql = "UPDATE `student`
            SET `request_status` = '$accepted_request'
            WHERE `student_id` = '$student_id'";
    try{
        mysqli_query($conn, $sql);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    
}
