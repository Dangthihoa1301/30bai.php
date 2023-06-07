<?php
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
$array = array(1, 4, 3, 2, 5);
$element = 2;
function findLocation($array, $element) {
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] === $element) {
            return $i;
        }
    }
    return -1; 
}
$position =  findLocation($array, $element);

if ($position !== -1) {
    echo "Phần tử $element tại vị trí $position trong mảng.";
} else {
    echo "Không tìm thấy phần tử $element trong mảng.";
}
?>