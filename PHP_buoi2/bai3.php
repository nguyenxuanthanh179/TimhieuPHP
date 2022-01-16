<?php
// Kiểm tra năm nhuận trong một mảng năm cho trước

$arr = [2010,2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019,2020,2021];

function check($year) {
    if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
        return true;
    }
    return false;
}

foreach ($arr as $value) {
    $result = check($value);
    if ($result == true) {
        echo $value. " is a leap year!" . "<br>";

    } else {
        echo $value. " isn't a leap year !" . "<br>";

    }
}
