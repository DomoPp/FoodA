<?php
session_start();
ini_set('display_errors', 1);
error_reporting(~0);
include("connect.php");


$fId = $_SESSION["fId"];
$cm_id = $_GET["cm_id"];



$sql = "DELETE FROM tb_comment WHERE cm_id = '" . $cm_id . "' ";
$query = mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn)) {

    header("location:detail.php?fId=" . $fId);
}

?>
<script type='text/javascript'>
    alert('ไม่ใช้ความคิดเห็นของคุณ ไม่สามารถลบได้');
    window.location = 'detail.php?fId=<?php echo $fId; ?>'
</script>