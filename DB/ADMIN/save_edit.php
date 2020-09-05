<?php session_start() ?>

    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    include("connect.php");

    $fId=$_SESSION["fId"];
    $txtfName=$_POST["txtfName"];
    $txtingredient=$_POST["txtingredient"];
    $txtformula=$_POST["txtformula"];
    
    
    $sql = "UPDATE food_menu SET fName='$txtfName',ingredient='$txtingredient',formula='$txtformula' WHERE fId=$fId";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:detail.php?fId=" . $fId);

    }
    ?>
