<?php
//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
$array =array(10,5,8,17,9,20);
function findSecondLargest($array) {
    $n = count($array);
    if ($n < 2) {
        return "Mảng phải có ít nhất 2 phần tử";
    }
    $max = $array[0];
    $secondMax = null;

    for ($i = 1; $i < $n; $i++) {
        if ($array[$i] > $max) {
            $secondMax = $max;
            $max = $array[$i];
        } elseif ($array[$i] < $max && ($secondMax === null || $array[$i] > $secondMax)) {
            $secondMax = $array[$i];
        }
    }
    if ($secondMax === null) {
        return "Không tìm thấy ";
    } else {
        return $secondMax;
    }
}
$secondLargest = findSecondLargest($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>