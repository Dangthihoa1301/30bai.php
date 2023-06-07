<?php
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
$array=array(5,-12,-5,-9,-1,0);
function findMaxOdd($array)
{
    $maxNegative = null;
    foreach ($array as $num) {
        if ($num < 0) { 
            if ($maxNegative === null || $num > $maxNegative) {
                $maxNegative = $num;
            }
        }
    }
    return $maxNegative;
}
$maxNegative = findMaxOdd($array);
if ($maxNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: " .$maxNegative ;
} else {
    echo "Không có số âm trong mảng.";
}
?>