<?php
/*
 * Trong vòng lặp 'while'
 * - cú pháp
 * while ($condition){
 *      statements;
 * }
 * - điều kiện điều khiển xuất hiện ở đầu vòng lặp.
 * - Lặp lại không xảy ra nếu điều kiện ở lần lặp đầu tiên xuất hiện sai.
 * Trong vòng lặp 'do-while'
 * - cú pháp:
 * do
 * {
 *     statements;
 * } while ($condition);
 * - điều kiện điều khiển xuất hiện ở cuối vòng lặp.
 * - Lặp lại xảy ra ít nhất một lần ngay cả khi điều kiện là sai ở lần lặp đầu tiên.
 */

$i = 100;
while ($i <= 200){ //vòng lặp while

    echo $i;
    $i++; // Tăng $i lên 1
}

$i = 10;
do {
    echo $i;
    $i++;
} while ($i < 10); //vòng lặp do while
