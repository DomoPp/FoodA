<?php
include("connect.php");

$txtUsername = $_POST["txtUsername"];
$txtPassword = $_POST["txtPassword"];
$txtName = $_POST["txtName"];


if (trim($_POST["txtUsername"]) == "") {
?> <script type='text/javascript'>
        alert('กรุณากรอกข้อมูลให้ครบ');
        window.location = 'register.php'
    </script>
<?php exit();
}
if (trim($_POST["txtPassword"]) == "") {
?> <script type='text/javascript'>
        alert('กรุณากรอกข้อมูลให้ครบ');
        window.location = 'register.php'
    </script>
<?php exit();
}
if ($_POST["txtPassword"] != $_POST["txtConPassword"]) {
?> <script type='text/javascript'>
        alert('รหัสผ่านไม่ตรงกัน');
        window.location = 'register.php'
    </script>
<?php exit();
}
if (trim($_POST["txtName"]) == "") {
?> <script type='text/javascript'>
        alert('กรุณากรอกข้อมูลให้ครบ');
        window.location = 'register.php'
    </script>
<?php exit();
}
$strSQL = "SELECT * FROM member WHERE Username = '" . trim($_POST['txtUsername']) . "' ";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if ($objResult) {
    ?> <script type='text/javascript'>
        alert('ชื่อผู่ใช้ซ้ำ');
        window.location = 'register.php'
    </script>
<?php exit();
} else {
    $strSQL = "INSERT INTO member (Username,Password,Name,Status)  VALUES ('$txtUsername', '$txtPassword','$txtName','USER')";
    $objQuery = mysqli_query($conn, $strSQL);

    if ($objQuery) {
        header("location:login.php");;
    }
}
?>