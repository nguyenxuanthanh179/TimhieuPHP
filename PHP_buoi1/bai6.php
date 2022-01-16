<?php

//Sắp xếp theo thứ tự từ bé đến lớn hoặc từ lớn đến bé
$arrayNumbers = array(1, 6, 3, 21, 12, 33, 44, 25, 1, 14, 25, 10);
sort($arrayNumbers);

echo "sorts the elements of the array in ascending numerical order";
echo "<br/>";
for ($i = 0; $i < count($arrayNumbers); $i++) {
    echo "$arrayNumbers[$i] " . "<br/>";
}

echo "<br/>";

rsort($arrayNumbers);
echo 'sorts the elements of the array in descending numerical order ';
echo "<br/>";
foreach ($arrayNumbers as $i) {
    echo "$i" . "<br/>";
}
?>


