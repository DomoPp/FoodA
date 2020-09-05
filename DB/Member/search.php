<html>
<head>
    <title>PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    $strKeyword = null;
    if (isset($_POST["txtKeyword"])) {
        $strKeyword = $_POST["txtKeyword"];
    }
    ?>
    <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
        <table width="599" border="1">
            <tr>
                <th>Keyword
                    <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword; ?>">
                    <input type="submit" value="Search"></th>
            </tr>
        </table>
    </form>
    <?php
    include("connect.php");
    $sql = "SELECT * FROM customer WHERE Name LIKE '%" . $strKeyword . "%' ";
    $query = mysqli_query($conn, $sql);
    ?>
    <table width="600" border="1">
        <tr>
            <th width="91">
                <div align="center">CustomerID </div>
            </th>
            <th width="98">
                <div align="center">Name </div>
            </th>
            <th width="198">
                <div align="center">Email </div>
            </th>
            <th width="97">
                <div align="center">CountryCode </div>
            </th>
            <th width="59">
                <div align="center">Budget </div>
            </th>
            <th width="71">
                <div align="center">Used </div>
            </th>
        </tr>
        <?php
        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            ?>
            <tr>
                <td>
                    <div align="center"><?php echo $result["CustomerID"]; ?></div>
                </td>
                <td><?php echo $result["Name"]; ?></td>
                <td><?php echo $result["Email"]; ?></td>
                <td>
                    <div align="center"><?php echo $result["CountryCode"]; ?></div>
                </td>
                <td align="right"><?php echo $result["Budget"]; ?></td>
                <td align="right"><?php echo $result["Used"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>