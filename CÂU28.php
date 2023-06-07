<?php
// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n
$n=100;
function SumOdd($n) {
  $sum = 0;
  for ($i = 1; $i <= $n; $i++) { 
    $sum += $i;
  }
  return $sum;
}
$sum=SumOdd($n);
echo "Tổng các số từ 1 đến " . $n . " là: " . $sum;

?>