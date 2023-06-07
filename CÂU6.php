<?php
//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
$array = array(9, 2, 12, 1, 21, 20);
function sortArray($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    foreach ($array as $value) {
        echo $value . " ";
    }
}

sortArray($array);
?>