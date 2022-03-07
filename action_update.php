<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;
// print_r($data);
$c_prefix = $data['c_prefix'];
$c_firstname = $data['c_firstname'];
$c_lastname = $data['c_lastname'];
$c_idcard = $data['c_idcard'];
$c_birthdate = $data['c_birthdate'];
$c_mobile = $data['c_mobile'];
$c_detail = $data['c_detail'];
$c_id = $data['c_id'];

$strSQL = "UPDATE contact SET 
        c_prefix = '$c_prefix',
        c_firstname = '$c_firstname',
        c_lastname = '$c_lastname',
        c_idcard = '$c_idcard',
        c_birthdate = '$c_birthdate',
        c_mobile = '$c_mobile',
        c_detail = '$c_detail'
    WHERE c_id = $c_id";
$objQuery = mysqli_query($objCon, $strSQL);
if($objQuery) {
    echo '<script>alert("บันทึกการแก้ไขแล้ว");window.location="index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด!!");window.location="update.php?c_id='. $c_id .'";</script>';
}
