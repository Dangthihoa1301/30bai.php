<?php
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
$array = array(1, 2, 2, 3, 4, 4, 5, 5, 5,6,6,7);
function removeDuplicates($array) {
    $length = count($array);
    $result = array();

    for ($i = 0; $i < $length; $i++) {
        if (!in_array($array[$i], $result)) {
            $result[] = $array[$i];
        }
    }

    return $result;
}
$uniqueArray = removeDuplicates($array);
echo "Mảng mới sau khi loại bỏ các phần tử trùng lặp: ";
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>