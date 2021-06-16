<?php
$arr = array(1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15);

// Tổng số phần tử trong mảng
$n = sizeof($arr);

// Tính khoảng cách bé nhất giữa các phần tử trong mảng
$diff = PHP_INT_MAX;
 
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++){
        if (abs($arr[$i] - $arr[$j]) < $diff) {
                $diff = abs( $arr[$i] - $arr[$j]);
                
            }

    }

}
echo "Khoảng cách bé nhất của 2 phần tử trong mảng là =".$diff;  

