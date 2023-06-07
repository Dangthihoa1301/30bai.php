<?php
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
$array = array("hello", "fine", "good", "fine", "hello", "bye");
$element="hello";
function countOccurrences($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrences";
?>