<?php session_start(); ?>
<html>

<head>
  <title>แก้ไขเมนู</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="jumbotron">
  <?php
  ini_set('display_errors', 1);
  error_reporting(~0);
  include("connect.php");
  $_SESSION["fId"] = $_GET["fId"];
  $sql = "SELECT * FROM food_menu WHERE fId = '" . $_SESSION["fId"] . "' ";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
  ?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="list.php"><span class="glyphicon glyphicon-home"></span> หน้าหลัก</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="add.php">เพิ่มสูตรอาหาร</a></li>
          <li class="active"><a href="#">แก้ไขเมนู <?php echo $result["fName"]; ?></a></li>
          <li><a href="detail.php?fId=<?php echo $_SESSION["fId"] ?>">สูตรอาหาร</a></li>
          <li><a href="About.php">เกี่ยวกับ</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="list_Member.php">ยินดีต้อนรับ <?php echo $_SESSION["Name"]; ?> จัดการสูตรอาหารของคุณ</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ </a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="dd">
    <div class="container">
      <br>
      <h2>แก้ไข</h2><br>
      <form action="save_edit.php" name="frmAdd" method="post">

        <div class="form-group">
          <label for="txtfName">ชื่ออาหาร:</label>
          <input type="text" class="form-control" id="txtfName" placeholder="<?php echo $result["fName"]; ?>" name="txtfName" value="<?php echo $result["fName"]; ?>">
        </div>
        <div class="form-group">
          <label for="txtingredient">วัถุดิบ:</label>
          <textarea type="text" class="form-control" id="txtingredient" placeholder="<?php echo $result["ingredient"]; ?>" name="txtingredient"><?php echo $result["ingredient"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="txtformula">สูตร:</label>
          <textarea type="text" class="form-control" id="txtformula" placeholder="<?php echo $result["formula"]; ?>" name="txtformula"><?php echo $result["formula"]; ?></textarea>
        </div>
        <div class="form-group form-check">
        </div>
        <button type="submit" class="btn btn-primary">แก้ไข</button>

      </form>
    </div>
  </div>
  <?php
  mysqli_close($conn);
  ?>
</body>

</html>