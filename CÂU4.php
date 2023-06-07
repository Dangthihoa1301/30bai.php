<?php
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
$string = "kiểm tra chuỗi";
$word = "chuỗi";
function checkStringContainWord($string, $word)
{
    $stringArr = explode(' ', $string);
    foreach ($stringArr as $str) {
        if ($str === $word) {
            return true; 
        }
    }
    return false; 
}
if (checkStringContainWord($string, $word)) {
    echo "Chuỗi \"$string\" chứa từ \"$word\"";
} else {
    echo "Chuỗi \"$string\" không chứa từ \"$word\"";
}
?>