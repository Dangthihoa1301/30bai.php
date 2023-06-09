<?php
//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$start = 1;
$end = 100;
function findPrimesInRange($start, $end) {
    $primes = array();

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
$primeNumbers = findPrimesInRange($start, $end);
echo "Các số nguyên tố từ $start đến $end là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}

?>