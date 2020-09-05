    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    include("connect.php");
    $fId = $_GET["fId"];
    $sql = "DELETE FROM food_menu WHERE fId = '" . $fId . "' ";
    $query = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)) ?>

    <script type='text/javascript'>
        alert('ลบเสร็จสิ้น');
        window.location = 'list.php'
    </script>