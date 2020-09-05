<?php session_start(); ?>
<html>

<head>
    <title>เกี่ยวกับ</title>
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
                <ul class="nav navbar-nav">
                    <li> <a class="navbar-brand" href="list.php"><span class="glyphicon glyphicon-home"></span> หน้าหลัก</a></li>
                    <li><a href="add.php">เพิ่มสูตรอาหาร</a></li>
                    <li class="active"><a href="About.php">เกี่ยวกับ</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">ยินดีต้อนรับผู้ดูแลระบบ <?php echo $_SESSION["Name"]; ?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ </a></li>
                </ul>

            </div>
        </div>

    </nav>
    <?php include("Ab.php") ?>
</body>

</html>