<?php session_start(); ?>
<html>

<head>
    <title>หน้าหลัก</title>
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
                    <li class="active"> <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span> หน้าหลัก</a></li>
                    <li><a href="add.php">เพิ่มสูตรอาหาร</a></li>
                    <li><a href="About.php">เกี่ยวกับ</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="list_Member.php">ยินดีต้อนรับ <?php echo $_SESSION["Name"]; ?> จัดการสูตรอาหารของคุณ</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ </a></li>
                </ul>

            </div>
        </div>

    </nav>


    <div class="jumbotron">
        <div class="container text-center">
            <br>
            <h1>เมนูอาหาร</h1>
            <br><br><br>
            <?php include("imgg.php") ?>




        </div>
        <div style="margin:auto;width:60%;">
            <?php
            include("connect.php");
            $sql = "SELECT * FROM food_menu";
            $query = $conn->query($sql);
            // $query = mysqli_query($conn, $sql);
            ?>

            <table class="table" width="600" border="1">
                <tr>
                    <th width="91">
                        <div align="center"># </div>
                    </th>
                    <th width="98">
                        <div align="center">เมนูอาหาร </div>
                    </th>
                    <th width="71">
                        <div align="center">สูตร</div>
                    </th>
                </tr>
                <?php
                while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <td>
                            <div align="center"><?php echo $result["fId"]; ?></div>
                        </td>
                        <td><?php echo $result["fName"]; ?></td>


                        <td align="right"><a href="detail.php?fId=<?php echo $result["fId"]; ?>"><img src="../img/view.png" width="30" height="30"></a></td>
                    </tr>

                <?php
                }
                ?>
        </div>
        </table>

        <?php mysqli_close($conn) ?>
    </div>
</body>

</html>