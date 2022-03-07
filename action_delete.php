<?php
    include_once('./function.php');
    $objCon = connectDB();
    $c_id = (int) $_GET['c_id'];

    // $strSQL = "DELETE FROM contact WHERE c_id = $c_id";
    $strSQL = "UPDATE contact SET c_status = 0 WHERE c_id = $c_id";
    $objQuery = mysqli_query($objCon, $strSQL);
    if($objQuery) {
        echo '<script>alert("ลบข้อมูลแล้ว");window.location="index.php";</script>';
    } else {
        echo '<script>alert("พบข้อผิดพลาด");window.location="index.php";</script>';
    }
?>