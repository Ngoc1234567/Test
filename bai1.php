<?php
$arr = array(11, 2, 8, 10, 5, 99, 1, 8, 9);

//sắp xếp mảng bằng SORT_STRING
sort( $arr, SORT_STRING);

$result = json_encode($arr);
	
echo "Mảng sau khi sắp xếp là =" .$result; 