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

$strSQL = "INSERT INTO 
contact(
    `c_prefix`,
    `c_firstname`,
    `c_lastname`, 
    `c_idcard`, 
    `c_birthdate`, 
    `c_mobile`, 
    `c_detail`
) VALUES (
    '$c_prefix', 
    '$c_firstname', 
    '$c_lastname', 
    '$c_idcard', 
    '$c_birthdate', 
    '$c_mobile', 
    '$c_detail'
)";

$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
if($objQuery) {
    echo '<script>alert("เพิ่มข้อมูลแล้ว");window.location="index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="create.php";</script>';
}