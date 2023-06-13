
<?php
include '../config/config.php';
session_start();
?>
<?php
if(isset($_POST['login'])){
    $id = $_POST['id'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    if ($role === "system_admin") {
        $table_name = "admin";
    } elseif ($role === "education_admin") {
        $table_name = "education_athourity";
    } elseif ($role === "metro_admin") {
        $table_name = "metro_office";
    } else {

    }


    $sql = "SELECT * FROM `$table_name` WHERE id='$id' AND password='$password'";


    $result = mysqli_query($conn,$sql);


    if (mysqli_num_rows($result) == 1) {

        if($table_name == "admin"){
            $_SESSION['admin_id'] = $id;
            header("location:../assets/dashboard.php");
        } 
        elseif($table_name == "education_athourity"){
            $_SESSION['education_id'] = $id;
            header("location:../assets/educationSystem.php");
        } 
        elseif($table_name == "metro_office"){
            $_SESSION['metro_id'] = $id;
            header("location:../assets/metroSystem.php");
        }
    } else {
       $_SESSION['error'] = "Wrong Data, Please check ID or Password or The Role.";
       header("location:../assets/loginAdmin.php");
    }

    $conn->close();
}
?>
