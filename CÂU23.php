<?php
//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
$number = 28;
function findPerfectNum($number)
{
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
if (findPerfectNum($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không là số hoàn hảo.";
}
?>