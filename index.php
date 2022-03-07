<?php
include_once('./function.php');
$objCon = connectDB();

// if ($objCon) {
//     echo 'connected';
// } else {
//     // echo mysqli_connect_error();
//     echo 'not connect';
// }
$perpage = 2;
// $page = $_GET['page'];
if (isset($_GET['page']) && (int) $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start = ($page - 1) * $perpage;

$condition = "";
$search = "";
if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = mysqli_real_escape_string($objCon, $_GET['search']);
    $condition = " AND c_firstname LIKE '%$search%' OR c_lastname LIKE '%$search%' OR c_idcard = '$search'";
}

// echo $search;

$sql = "SELECT * FROM contact WHERE c_status = 1$condition ORDER BY c_id DESC LIMIT $start, $perpage";
$objQuery = mysqli_query($objCon, $sql);
// while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
//     print_r($objResult);
// }
?>
<!doctype html>
<html lang="th" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูล</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">รายการข้อมูล</h1>
            <!-- ปุ่มเพิ่มข้อมูล -->
            <div class="mt-4">
                <a href="create.php" class="btn btn-success">เพิ่มข้อมูล</a> 
                <a href="report.php" class="btn btn-primary">รายงาน</a>
            </div>
            <!-- ฟอร์มค้นหา -->
            <div class="mt-4">
                <form>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <label for="search" class="col-form-label">ใส่ข้อมูลเพื่อค้นหา</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="search" name="search" value="<?php echo $search; ?>" class="form-control">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">ค้นหา</button>
                        </div>
                        <div class="col-auto">
                            <a href="index.php" class="btn btn-secondary">เครียร์</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ตารางข้อมูล -->
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>รหัส</th>
                        <th>เลขบัตรประจำตัวประชาชน</th>
                        <th>ชื่อ - สกุล</th>
                        <th>วัน/เดือน/ปี เกิด</th>
                        <th>โทรศัพท์</th>
                        <th>การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                    ?>
                        <tr>
                            <td><?php echo $objResult['c_id']; ?></td>
                            <td><?php echo $objResult['c_idcard']; ?></td>
                            <td><?php echo $objResult['c_prefix'], $objResult['c_firstname'], ' ', $objResult['c_lastname']; ?></td>
                            <td><?php echo date_th($objResult['c_birthdate']); ?></td>
                            <td><?php echo $objResult['c_mobile']; ?></td>
                            <td>
                                <a href="update.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="action_delete.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยัน');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- หมายเลขหน้า -->
            <?php
            $strSQL = "SELECT * FROM contact WHERE c_status = 1$condition ORDER BY c_id DESC";
            $objQuery = mysqli_query($objCon, $strSQL);
            $total_record = mysqli_num_rows($objQuery);
            // echo 'all = ',$total_record;
            $total_page = ceil($total_record / $perpage);
            // echo 'all page = ', $total_page;
            ?>
            <div>
                <ul class="pagination justify-content-end">
                    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                        <li class="page-item<?php if ($page == $i) { echo ' active'; } ?>">
                            <a class="page-link" href="index.php?search=<?php echo $search; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">&copy; 2022</span>
        </div>
    </footer>
</body>

</html>