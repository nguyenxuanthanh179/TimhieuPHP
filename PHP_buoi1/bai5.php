<?php
// Viết function kiểm tra năm nhuận
function check($year)
{
    if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
        return "$year is a leap year";
    }
    return "$year isn't a leap year";
}

echo check(2021);
