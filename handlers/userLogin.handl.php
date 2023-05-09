<?php
session_start();
include "../config/config.php";
?>

<?php
if (isset($_POST['bt']))
{
    $email =  ($_POST['email']);
    $pass = ( $_POST['password']);

    $stmt = "SELECT * FROM `student` WHERE `email` = '$email' AND `password` = '$pass'";
    $result = mysqli_query($conn, $stmt);
    if ( mysqli_num_rows ($result)===1){
        $_SESSION['email'] = $email;
        header("location:../assets/request.php");
    } 
    else{
    echo'email or password is not correct try again';
    }
}

?>
