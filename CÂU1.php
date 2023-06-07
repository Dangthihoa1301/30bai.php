<?php
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
$number=12;
function check($number){
   if ($number % 2 == 0){
      return true;
   }
    else{
      return false;
    }
   }
      if (check($number)) {
         echo "Số $number là số chẵn";
     } else {
         echo "Số $number là số lẻ";
     }
?>