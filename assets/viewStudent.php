<?php
include "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sassPract/css/normalize.css">
    <link rel="stylesheet" href="sassPract/css/all.min.css">
    <link rel="stylesheet" href="sassPract/css/bootstrap.min.css">
    <link rel="stylesheet" href="sassPract/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
$student_id = $_GET['student_id'];
$sql = "SELECT * FROM student WHERE student_id = $student_id ";
$result = mysqli_query($conn, $sql);



if($row = mysqli_fetch_assoc($result)){
echo "ID: " . $row['student_id'] . "<br>";
echo "Name: " . $row['full_name'] . "<br>";
echo "Email: " . $row['email'] . "<br>";
echo "National ID: " . $row['national_id'] . "<br>";
echo "Gender: " . $row['gender'] . "<br>";
echo "Birthdate: " . $row['birthdate'] . "<br>";
echo "Address: " . $row['address'] . "<br>";
echo "Education Stage: " . $row['edu_stage'] . "<br>";
echo "Education Authority: " . $row['edu_auth'] . "<br>";
echo "Personal Image: " . $row['personal_img'] . "<br>";
echo "National ID or Birthdate Certificate Image: " . $row['identity_img'] . "<br>";
echo "University / School ID Image: " . $row['identity_img'] . "<br>";
echo "Near Station To Recieve the card: " . $row['near_station'] . "<br>";
echo "Start Station: " . $row['start_station'] . "<br>";
echo "End Station: " . $row['end_station'] . "<br>";
}
?>
</body>
</html>