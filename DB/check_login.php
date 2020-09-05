<?php
session_start();
include("connect.php");


$strSQL = "SELECT * from  member WHERE Username = '" . mysqli_real_escape_string($conn, $_POST['txtUsername']) . "'
   and Password = '" . mysqli_real_escape_string($conn, $_POST['txtPassword']) . "'";

$objOuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objOuery, MYSQLI_ASSOC);

if (!$objResult) {
?> <script type='text/javascript'>
		alert('ชื่อผู้ใช้หรือหรัสผ่านไม่ถูกต้อง');
		window.location = 'login.php'
	</script>
<?php exit();
} else {
	$_SESSION["UserID"] = $objResult["UserID"];
	$_SESSION["Status"] = $objResult["Status"];
	$_SESSION["Name"] = $objResult["Name"];

	session_write_close();

	if ($objResult["Status"] == "ADMIN") {
		header("location:./ADMIN/list.php");
	} else {
		header("location:./Member/list.php");
		// header("location:/member/list.php");
	}
}
	//mysqli_close();
