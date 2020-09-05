<?php
session_start();
ini_set('display_errors', 1);
error_reporting(~0);
include("connect.php");


$fId = $_SESSION["fId"];
$cm_id = $_GET["cm_id"];
$cm_name = $_SESSION["Name"];

$sql1 = "SELECT * FROM tb_comment WHERE cm_id = '" . $cm_id . "' ";
$query1 = mysqli_query($conn, $sql1);
$result = mysqli_fetch_array($query1, MYSQLI_ASSOC);

$cm_name1 = $result["cm_name"];


if ($cm_name == $cm_name1) {
    $sql = "DELETE FROM tb_comment WHERE cm_id = '" . $cm_id . "' ";
    $query = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)) {

        header("location:detail.php?fId=" . $fId);
    }
}
?>
<script type='text/javascript'>
    alert('ไม่ใช้ความคิดเห็นของคุณ ไม่สามารถลบได้');window.location = 'detail.php?fId=<?php echo $fId; ?>'
</script>