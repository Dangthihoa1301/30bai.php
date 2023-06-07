<?php
//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
$a=10;
function factorial($a) {
  $result = 1;
  for ($i = 1; $i <= $a; $i++) { 
    $result *= $i;
  }

  echo "Giai thừa của " . $a . " là: " . $result;
}

factorial($a)
?>