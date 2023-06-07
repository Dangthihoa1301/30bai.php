<?php
//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$array = array(1, 2, 3, 4, 5, 6);
function countElements($array) {
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }
    return $count;
}

$elementCount = countElements($array);
echo "Số lượng phần tử trong mảng: " . $elementCount;
?>