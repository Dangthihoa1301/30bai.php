<?php
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
$n=153;
function Armstrong($n) {
  $sum = 0;
  $rem;
  $num = $n;
  while ($num != 0)
   {
      $rem = $num % 10;
      $sum = $sum + ($rem*$rem*$rem);
      $num = $num / 10;
   }
   if($n == $sum)
      echo $n . " là số Armstrong";
   else
      echo $n . " không phải là số Armstrong";
}
Armstrong($n)
?>