<?php
// Viết function kiểm tra số nguyên tố

function ísPrime($number)
{
    if ($number < 2) {
        return "$number isn't prime number";
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return "$number isn't prime number";
        }
    }
    return "$number is prime";
}

echo ísPrime(6);

?>



