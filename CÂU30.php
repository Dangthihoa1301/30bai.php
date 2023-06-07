<?php
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
$string = "Hello, World!";
$substring = "World";
function kiemTraChuoiCon($string, $subString)
{
    $strLen = strlen($string);
    $subStrLen = strlen($subString);

    if ($subStrLen > $strLen) {
        return false;
    }

    for ($i = 0; $i <= $strLen - $subStrLen; $i++) {
        $j = 0;
        while ($j < $subStrLen && $string[$i + $j] == $subString[$j]) {
            $j++;
        }
        if ($j == $subStrLen) {
            return true;
        }
    }

    return false;
}
if (kiemTraChuoiCon($string, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'.";
} else {
    echo "Chuỗi '$substring' không là chuỗi con của chuỗi '$string'.";
}
?>