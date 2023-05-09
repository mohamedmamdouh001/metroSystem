
<?php
include '../config/config.php'
?>
<?php
session_start();
if (isset($_POST['systemLogin'])){
   $id    = ($_POST['admin_id']);
   $password = ( $_POST['password']);

   $stmt = "SELECT * FROM `admin` WHERE `admin_id` = '$id' && `password` = '$password'";
   $res= mysqli_query($conn,$stmt);
   $row= mysqli_fetch_assoc($res);

   if (mysqli_num_rows ($res) === 1){
      if (($row["role"]) == "system_admin"){
      echo "you are system admin in our system";
      }

   elseif( ($row["role"]) == "metro_admin"){
      echo" you are metro admin check requests";
      }

   else if (($row["role"]) == "education_admin"){ 
      echo  "you are education_admin valdiate request";
      }
   }
   else{
      echo'wrong admin';
   }
}
?>
