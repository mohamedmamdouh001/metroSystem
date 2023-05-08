<?php

$host = 'localhost';
$user = 'root';
$psw = '';
$dbname = 'metrodb';
try{
    $conn = mysqli_connect($host, $user, $psw, $dbname);
}
catch(Exception $e){
    echo "Error:" . $e->getMessage(); 
}
