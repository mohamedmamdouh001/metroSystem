
<?php
session_start();
include '../config/config.php'
?>
<?php

if (isset($_POST['submit'])){
   $firstName = filter_var($_POST['First_name'],FILTER_SANITIZE_STRING);
   $lastName = filter_var($_POST['Last_name'],FILTER_SANITIZE_STRING);
   $fullName = $firstName . " " . $lastName;
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirm_password'];
   $nationalID = $_POST['national_id'];
   $birthdate = $_POST['birthdate'];
   $gender = $_POST['gender'];
   
   $sql = "SELECT * FROM `student` WHERE `email` = '$email' ";
   $result = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($result);
   if($count == 0){
      $reg="INSERT INTO `student`(`full_name`, `password`, `national_id`, `email`, `gender`, `birthdate`)
            VALUES('$fullName', '$password', '$nationalID', '$email', '$gender', '$birthdate')";
      mysqli_query($conn, $reg); 
      $_SESSION["email"] = $email;
      $_SESSION["national_id"] = $nationalID;
      $_SESSION["success"] = "Student registration done successfully"; //Session
      header("location:../assets/request.php");
   }
   else{
      $_SESSION['error'] = "Student is already exist"; //Session
      header("location:../assets/signup.php");
   }

}
?>
