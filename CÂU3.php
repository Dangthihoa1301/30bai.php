<?php
//3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
$multiplicationTable=0;
function tablePrinting($multiplicationTable){
   for($i = 1; $i < 10; $i ++) {
      echo "<td>";
      for($j = 1; $j <= 10; $j ++) {
          echo "$i x $j = " . ($i * $j);
          echo "<br>";
      }
      echo "</td>";
}
}
tablePrinting($multiplicationTable)
?>