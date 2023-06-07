<?php
$array = array(9, 2, 12, 1, 21, 20);
function findMinMax($array) {
    $min = $array[0];
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }

    return array('min' => $min, 'max' => $max);
}

$result = findMinMax($array);

echo "Giá trị nhỏ nhất: " . $result['min'] . "<br>";
echo "Giá trị lớn nhất: " . $result['max'];
?>