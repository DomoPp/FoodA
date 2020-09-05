<html>

<head>
    <title>เข้าสู่ระบบ</title>
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
                        <li > <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> หน้าหลัก</a></li>
                        <li class="active"><a href="#">เข้าสู่ระบบ</a></li>
                        <li><a href="About.php">เกี่ยวกับ</a></li>
                    </ul>

            </div>

        </nav>

<div class="dd">
    <div class="container">
        <h2>เข้าสู่ระบบ</h2>
        <form name="form1" method="post" action="check_login.php">
            <div class="form-group">
                <label for="Username">&nbsp;ชื่อผู้ใช้</label>
                <input type="text" class="form-control" id="txtUsername" placeholder="ชื่อผู้ใช้" name="txtUsername">
            </div>
            <div class="form-group">
                <label for="Password">&nbsp;รหัสผ่าน</label>
                <input type="password" class="form-control" id="txtPassword" placeholder="รหัสผ่าน" name="txtPassword">
            </div><br>
            <button type="submit" name="Submit" class="btn btn-success">เข้าสู่ระบบ</button>
            <a href="register.php" class="btn btn-link" role="button">สมัครสมาชิก</a>
        </form>
    </div>
</div>
</body>

</html>