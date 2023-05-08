
<?php
 include '../config/config.php'
?>
<?php

if (isset($_POST['submit'])){
   $firstName = filter_var($_POST['First_name'],FILTER_SANITIZE_STRING);
   $lastName = filter_var($_POST['Last_name'],FILTER_SANITIZE_STRING);
   $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
   $password = filter_var($_POST['password'],FILTER_SANITIZE_NUMBER_INT);
   $confirmPassword = filter_var($_POST['confirm_password'],FILTER_SANITIZE_NUMBER_INT);;
   $nationalID = $_POST['national_id'];
   $birthdate = $_POST['birthdate'];
   $gender = $_POST['gender'];

   $sql = "SELECT COUNT(email) FROM `student` WHERE `email` = '$email' AND `password` = '$password' ";
   $result = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($result);
   if($count == 1){
      $reg="INSERT INTO `student`(First_name, Last_name, password, confirm_password, national_id, email, gender, birthdate)
      VALUES('$firstName','$lastName', '$password', '$confirmPassword', '$nationalID', '$email', '$gender', '$birthdate')";
   mysqli_query($conn,$reg); 
   echo'student registration done successfully';
   }
   else{
      echo "Student is already exist";
   }

}
?>
