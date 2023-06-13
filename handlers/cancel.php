<?php
require_once("../config/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM `reqeust` WHERE `request_id` = '$id'";
$result = mysqli_query($conn, $sql);
header("Location:../assets/request.php");