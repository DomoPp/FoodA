<?php session_start();
ini_set('display_errors', 1);
error_reporting(~0);

$_SESSION["fId"] = $_GET["fId"];




?>


<html>

<head>
    <title>สูตร</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../head.css">
</head><?php
        include("connect.php");


        $sql = "SELECT * FROM food_menu WHERE fId = '" . $_SESSION["fId"] . "' ";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
        ?>

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
                    <li><a href="add.php">เพิ่มสูตรอาหาร</a></li>
                    <li class="active"><a href="#"><?php echo $result["fName"]; ?></a></li>
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
    <img class="center" src="../img/<?= $result['img'] ?>" alt="<?= $result['img'] ?>" width="50%" height="50%" > 
        <table class="table jumbotron">

            <tr>
                <th width="120">ชื่อ</th>
                <td><?php echo $result["fName"]; ?></td>
            </tr>
            <tr>
                <th width="120">ส่วนผสม</th>
                <td><?php echo $result["ingredient"]; ?></td>
            </tr>
            <tr>
                <th width="120">วิธีทำ</th>
                <td><?php $text = explode(" ", $result["formula"]);
                    for ($start = 0; $start < count($text); $start++) {
                        print $text[$start] . "<br>";
                    }
                    ?>
                </td>

            </tr>

        </table>
        
    </div>
    <?php
    include("Comment.php");
    ?>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>