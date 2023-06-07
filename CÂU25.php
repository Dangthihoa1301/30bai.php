<?php
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
$n=29;
function frimeNumber($n) {
  if($n < 2){
        echo $n . " không phải là số nguyên tố. <br>";
    }
    $count = 0;
    for($j = 2; $j <= sqrt($n); $j++){
        if($n % $j == 0){
            $count++;
        }
    }

    if($count == 0){
        echo $n . " là số nguyên tố. <br>";
    } else {
        echo $n . " không phải là số nguyên tố. <br>";
    }
}
frimeNumber($n)
?>