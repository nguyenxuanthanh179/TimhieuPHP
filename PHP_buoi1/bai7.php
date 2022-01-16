<?php
function isUppercase($string) //Hàm chuyển sang In Hoa
{
    echo strtoupper($string);
}
function isLowercase($string) //Hàm chuyển sang in thường
{
    echo strtolower($string);
}
$name = "nguyễn xuân thanh";
$idol = "RONALDO";
isUppercase($name); // xuất chữ thường thành chữ In Hoa
echo "<br>";
isLowercase($idol); // Xuất chữ In hoa thành chữ thường .

?>