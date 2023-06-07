<?php
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
$array = array(4, -6, 2, -22, -11);
function findMaxOdd($array) {
  $max = $array[0];
  for ($i = 1; $i < count($array); $i++) { 
    if ($max < $array[$i] && $array[$i] > 0) {
      $max = $array[$i];
    }
  }

  echo "Số dương lớn nhất trong mảng là: " . $max;
}
findMaxOdd($array)
?>