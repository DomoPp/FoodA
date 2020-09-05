<?php session_start(); ?>
<html>

<head>
    <title>About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="head.css">
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
                    <li><a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> หน้าหลัก</a></li>
                    <li class="active"><a href="#">เกี่ยวกับ</a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">ยินดีต้อนรับ กรุณาเข้าสู่ระบบ</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ </a></li>
            </ul>

        </div>
        </div>

    </nav>
<?php include("Ab.php") ?>
</body>

</html>