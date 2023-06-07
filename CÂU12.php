<?php
//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
$array = array(1, 2, 3, 4, 5);
$element = 6;
$position = 2;
function insertElement($array, $element, $position) {
    $length = count($array);

    if ($position < 0 || $position > $length) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }

    $newArray = array();

    for ($i = 0; $i < $length + 1; $i++) {
        if ($i === $position) {
            $newArray[] = $element;
        }
        if ($i < $length) {
            $newArray[] = $array[$i];
        }
    }

    return $newArray;
}
$newArray = insertElement($array, $element, $position);

echo "Mảng mới sau khi chèn: ";
foreach ($newArray as $value) {
    echo $value . " ";
}
