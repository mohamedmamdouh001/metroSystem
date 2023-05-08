<?php
include "../config/config.php";
?>

<?php
if (isset($_POST['bt']))
{
    $mail =  ($_POST['email']);
    $pass = ( $_POST['password']);

    $stmt = "SELECT * FROM `student` WHERE `email` = '$mail' AND `password` = '$pass'";
    $result = mysqli_query($conn, $stmt);
    if ( mysqli_num_rows ($result)===1){
        echo "Login is success";
        header("location:request.html");
    } 
    else{
    echo'email or password is not correct try again';
    }
}

?>
