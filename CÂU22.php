<?php
// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
$a= 48;
$b= 12;
function USCLN($a, $b)
{   
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}
function BSCNN($a, $b)
{
    $uscln = USCLN($a, $b);
    $bscnn = ($a * $b) / $uscln;
    return $bscnn;
}
echo "Ước số chung lớn nhất là: " .  USCLN($a, $b). "<br>";
echo "Bội số chung nhỏ nhất là: " . BSCNN($a, $b). "<br>";
?>