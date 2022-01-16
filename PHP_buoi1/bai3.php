<?php
$a = 10;
function binhphuong(&$b)
{
    $b *= $b;
}
binhphuong($a); //100
echo $a; //100
//khi sử dụng tham chiếu thì biến $a cũng đã bị thay đổi theo.
?>