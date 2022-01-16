<?php
// Kiểm tra số nguyên tố trong một mảng cho trước

$arrPrime = array(2, 3, 4, 5, 6, 7, 8, 9);
function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
foreach ($arrPrime as $value) {
    $result = isPrime($value);
    if ($result != 0) {
        echo $value . " is Prime number" . "<br>";
    } else {
        echo $value . " isn't Prime number" . "<br>";
    }
}
?>
