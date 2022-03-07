<?php
date_default_timezone_set("Asia/Bangkok");
// phpinfo();

$a = 0;
$b = 1;

// echo "c = $a + $b";
echo "c = ", $a + $b;
echo '<div><b>', ($a + $b),'</b></div>';

echo date_default_timezone_get();
echo '<br />';
echo date("Y-m-t H:i:s");

$current_date = date("Y-m-d");

echo '<br />';

// if($current_date == "2021-03-01") {
//     echo 'true';
// } else if($current_date == "2021-03-02") {
//     echo 'Else IF';
// } else if($current_date == "2021-03-03") {
//     echo 'Else IF #3';
// } else {
//     echo 'false';
// }

// $date1 = date_create("2021-03-30");
// $date2 = date_create(date("2021-04-01"));
// $diff = date_diff($date1,$date2);

// $day = $diff->format("%a") + 1;
// echo $day;

// if($day > 21) {
//     echo 'เกินระยะเวลา';
// } else {
//     echo 'เวลาปกติ';
// }

// $date = date("Y-m-d");
// // echo $date;
// $date1 = explode('-', $date);
// // print_r($date1[1]);
// $th_date = $date1[2] . '/' . $date1[1] . '/' . ($date1[0] + 543);
// echo $th_date;

// echo a_func(5, 5);

// function a_func($data1, $data2) {
//     // $a = $data1;
//     // $b = $data2;
//     $c = $data1 + $data2;
//     return $c;
// }
$start_date = date_th(date("Y-m-d"));
echo $start_date;
echo '<br />';
echo date_en($start_date);

function date_th($date) {
    $date_array = explode('-', $date);
    $th_date = $date_array[2] .
     '/' . $date_array[1] . '/' .
      ($date_array[0] + 543);

      return $th_date;
}

function date_en($date) {
    $date_array = explode('/', $date);
    $en_date = ($date_array[2] - 543) . '-' . 
    $date_array[1] . '-' . $date_array[0];
    return $en_date;
}