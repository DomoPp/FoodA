<?php session_start() ?>
<html>

<head>
  <title>เพิ่มสูตรอาหาร</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="jumbotron">
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
          <li class="active"><a href="#">เพิ่มสูตรอาหาร</a></li>
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
      <h2>เพิ่มสูตรอาหาร</h2><br>
      <form action="save.php" name="frmAdd" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="txtfName">ชื่ออาหาร:</label>
          <input type="text" class="form-control" id="txtfName" placeholder="ใส่ ชื่ออาหาร" name="txtfName">
        </div>
        <div class="form-group">
          <label for="txtingredient">วัถุดิบ:</label>
          <textarea type="text" class="form-control" id="txtingredient" placeholder="ใส่ วัถุดิบ" name="txtingredient"></textarea>
        </div>
        <div class="form-group">
          <label for="txtformula">สูตร:</label>
          <textarea type="text" class="form-control" id="txtformula" placeholder="ใส่ สูตร" name="txtformula"></textarea>
        </div>
        <div class="form-group">
          <label>รูปภาพ</label>
          <input type="file" class="form-control-file" name="apart_img">
        </div>
        <div class="form-group form-check">
        </div>
        <button type="submit" class="btn btn-primary">เพิ่ม</button>
      </form>
    </div>
  </div>

</body>

</html>