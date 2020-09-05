<?php session_start();
    ini_set('display_errors', 1);
    include("connect.php");




if (($_FILES['apart_img']['name'] != "")) {
    // Where the file is going to be stored
    $target_dir = "../img/";
    $file = $_FILES['apart_img']['name'];
    $path = pathinfo($file);
    if ($path['filename'] != null) {
        $filename = $path['filename'];
    } else {
        $filename = "no-image-box";
    }

    $ext = $path['extension'];
    $temp_name = $_FILES['apart_img']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . "." . $ext;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        //  echo "Sorry, file already exists.";
    } else {
        move_uploaded_file($temp_name, $path_filename_ext);
        //  echo "Congratulations! File Uploaded Successfully.";
    }





    $txtfName=$_POST["txtfName"];
    $txtingredient=$_POST["txtingredient"];
    $txtformula=$_POST["txtformula"];
    $UserID= $_SESSION["UserID"];
    $img = $filename . ".jpg";


 
}

    $sql = "INSERT INTO food_menu (fName,ingredient,formula,img,UserID)  VALUES ('$txtfName', '$txtingredient','$txtformula','$img',$UserID)";
    $query = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    if ($query) {
        echo '<script type="text/javascript">window.onload = function () { alert("เพิ่มข้อมูลสำเร็จ"); window.location = "list.php";}</script>';
    } else {

        echo '<script type="text/javascript">window.onload = function () { alert("เพิ่มข้อมูลไม่สำเร็จ"); window.location = "list.php";}</script>';
    }
    mysqli_close($conn);
