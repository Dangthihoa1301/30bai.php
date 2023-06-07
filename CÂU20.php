<?php
//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
$array = array(1, 2, 3, 4, 5);
$element = 0;
function addElementToBeginning($array, $element) {
    $length = count($array);
    for ($i = $length - 1; $i >= 0; $i--) {
        $array[$i + 1] = $array[$i];
    }
    $array[0] = $element;
    return $array;
}
$arrayWithElementAtBeginning = addElementToBeginning($array, $element);
echo "Mảng sau khi thêm phần tử vào đầu: ";
foreach ($arrayWithElementAtBeginning as $value) {
    echo $value . " ";
}
echo "<br>";
function addElementToEnd($array, $element) {
    $array[] = $element;

    return $array;
}
$arrayWithElementAtEnd = addElementToEnd($array, $element);
echo "Mảng sau khi thêm phần tử vào cuối: ";
foreach ($arrayWithElementAtEnd as $value) {
    echo $value . " ";
}
?>