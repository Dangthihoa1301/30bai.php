<?php
//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
$start = 1;
$end = 100;
function  ferfectSquare($start, $end)
{
    $result = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $result[] = $i;
        }
    }
    return $result;
}
$squareNumbers = ferfectSquare($start, $end);
if (!empty($squareNumbers)) {
    echo "Các số chính phương từ $start đến $end là: ";
    foreach ($squareNumbers as $number) {
        echo $number . " ";
    }
} else {
    echo "Không có số chính phương trong khoảng từ $start đến $end.";
}
?>