<?php
$arr = [2, 99, 93, 93, -152, 9, -1];
$max = 0;
for ($i = 0; $i < count($arr); $i++) {
//    if ($i == 0) {
//        $max = $arr[0];
//    }
//    if ($max <= $arr[$i]) {
//        $max = $arr[$i];
//    }
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] <= $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

$k = 4;

$result = $arr[0];
$stt = 1;

for ($i = 1; $i < count($arr); $i++) {
    if ($result != $arr[$i]) {
        $stt++;
    }
    $result = $arr[$i];

    if ($stt == $k) {
        break;
    }
}

echo $result;


?>