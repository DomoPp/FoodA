<?php
ob_start();
// session_start();
ini_set('display_errors', 1);
error_reporting(~0);
include("connect.php");
$fId = $_SESSION["fId"];




if (isset($_POST['submit'])) {

  $name = $_SESSION["Name"];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO tb_comment (cm_name, cm_comment,fId)  VALUES ('$name', '$comment',$fId) ";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    echo "<script>alert('ไม่สามารภคอมเม้นได้')</script>";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>ความคิดเห็น</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div style="margin:auto;width:95%;">


    <br>
    <h4>การแสดงความคิดเห็น</h4>
 


    <?php
    $sql1 = "SELECT COUNT(*) FROM tb_comment WHERE fId='$fId'";
    $result1 = $conn->query($sql1);
    $result1->num_rows > 0;
    $row1 = $result1->fetch_assoc(); ?>



<div border="1">
      <h4><span class="badge"><?= $row1["COUNT(*)"];  ?></span> Comments:</h4><br>
      <ul style="list-style-type:none;">
        <?php
        $sql = "SELECT * FROM tb_comment WHERE fId='$fId' order by cm_id desc";
        $result = mysqli_query($conn, $sql);

        while ($rows = mysqli_fetch_assoc($result)) :
        ?>
          <li>
            <div>
              <div class="col-sm-1 ">
                <!--รูปคนในคอมเม้น-->
                <img src="img/m.png" height="63" width="50" alt="Avatar">
              </div>
              <!-- คอมเม้น -->
              <h4><?= $rows['cm_name'] ?> <small><?= $rows['cm_date'] ?></small></h4>
              <h5> <?= $rows['cm_comment'] ?></h5>




              <br><br>
            </div>
          </li>
        <?php
        endwhile;
        ?>
      </ul>

    </div>
  </div>
</body>

</html>
<?php
ob_start();
// session_start();
ini_set('display_errors', 1);
error_reporting(~0);
include("connect.php");
$fId = $_SESSION["fId"];




if (isset($_POST['submit'])) {

  $name = $_SESSION["Name"];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO tb_comment (cm_name, cm_comment,fId)  VALUES ('$name', '$comment',$fId) ";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    echo "<script>alert('ไม่สามารภคอมเม้นได้')</script>";
  }
}

?>