<?php 
$array = array(0, 100, -4, 8, 145, 5, 99, 100);

$max_1 = $max_2 = $max = 0 ;
// $max_1 là số nguyên lớn thứ nhất
// $max_2 là số nguyên lớn thứ hai
// $max tổng 2 số nguyên lớn nhất


for ($i=0; $i<count($array); $i++) {

    if ($array[$i] > $max_1)
    {
      $max_1 = $array[$i];
    } 
    else if ($array[$i] > $max_2 && $array[$i] != $max_1)
    {
      $max_2 = $array[$i];
    }
    $max = $max_1 + $max_2;
}
echo "Tổng của 2 số nguyên có giá trị lớn nhất là =".$max;
