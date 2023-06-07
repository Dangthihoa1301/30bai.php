<?php
//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
$string="abba";
function isPalindrome($string) {
    $length = strlen($string);
    $isPalindrome = true;
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            $isPalindrome = false;
            break;
        }
    }

    if ($isPalindrome) {
        echo "Chuỗi '$string' là chuỗi Palindrome.";
    } else {
        echo "Chuỗi '$string' không phải là chuỗi Palindrome.";
    }
}
isPalindrome($string);
?>