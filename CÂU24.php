<?php
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
$array=array(55,77,99,101,3);
function findMaxOdd($array) {
  $max = $array[0];
  for ($i = 1; $i < count($array); $i++) { 
    if ($max < $array[$i] && $array[$i] % 2 != 0) {
         $max = $array[$i];
    }
  }
  return $max;
}
$max=findMaxOdd($array);
echo "Số lẻ lớn nhất trong mảng là: " . $max;

?>