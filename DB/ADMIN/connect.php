<?php
    ini_set('display_errors',1);
    error_reporting(~0);
$serverName ="localhost";
$userName = "root";
$userPassword = "";
$dbName ="it_6006";

    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    if(mysqli_connect_errno()){
        echo "Database Connect Failed:".mysqli_connect_errno();
    }else{
     //   echo "Databaseted Connect.";
    }
   // mysqli_close($conn);
?>