<?php
//15.Viết chương trình PHP để đảo ngược một chuỗi.
$string = "DANG,THI,HOA";
function reverseString($str) {
    $length = strlen($str);
    $reversedStr = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedStr .= $str[$i];
    }
    return $reversedStr;
}
$reversedString = reverseString($string);
echo "Chuỗi sau khi đảo ngược: " . $reversedString;
?>