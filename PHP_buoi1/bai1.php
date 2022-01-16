<?php

//global
$a = 30;
$b = 70;
function Test1(){
    global $a, $b;
    $b = $a + $b;
}
Test1();
echo $b; //Xuất ra giá trị 100


function Test2()
{
    $a = 100; //phạm vi cục bộ
}
Test2();


//Static
function Test3(){
    static $a = 0;
    echo $a;
    $a++;
}
Test3();
Test3();
Test3();
//Khi một biến được thiết lập từ khóa static, sau mỗi lần hàm được gọi thì biến vẫn có
//thông tin về giá trị mà nó chứa từ lần cuối cùng hàm được gọi.

?>
