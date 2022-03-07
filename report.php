<?php
include_once('./function.php');
$objCon = connectDB();
$strSQL = "SELECT * FROM contact";
$objQuery = mysqli_query($objCon, $strSQL);
$total_record = mysqli_num_rows($objQuery);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Sarabun', sans-serif;
        }

        @media print {
            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="text-center fw-bold">รายงานข้อมูลการติดต่อ</div>
    <div class="mb-3 mt-4">จำนวนการติดต่อทั้งหมด <?php echo $total_record; ?> รายการ รายละเอียดดังนี้</div>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ - สกุล</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $objResult['c_firstname'], ' ', $objResult['c_lastname']; ?></td>
                    <td><?php echo $objResult['c_detail']; ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>

    <!-- ปุ่มพิมพ์ -->
    <div class="mt-4 text-center no-print">
        <button type="button" class="btn btn-warning" onclick="return print();">พิมพ์</button>
    </div>

</body>

</html>