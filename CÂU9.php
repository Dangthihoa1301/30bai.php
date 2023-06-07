<?php
//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
$a=array('1','5','6','7','8','9');
function sumArray($a) {
  $sum = 0;
  foreach($a as $item) {
    $sum += $item;
  }
  echo "Tổng mảng đã tạo là: " . $sum;
}
  sumArray($a) 
?>