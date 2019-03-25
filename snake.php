<?php

include_once "point.php";
$my_array = array(
    0 => array (0, 0, 0, 0, 0),
    1 => array ("-","-","-","-","-"),
    2 => array ("-","-","-","-","-"),
    3 => array ("-","-","-","-","-"),
    4 => array ("-","-","-","-","-"),
);

$p = new Point();

echo "1: {$my_array[1][2]} \n";

$p->x = 1;
$p->y = 2;
$p->sym = "*";
$my_array[$p->x][$p->y] = $p->sym;
$p->drawPoint($p->x, $p->y, $my_array);
echo "3: {$my_array[0]} \n";
echo "3: {$my_array[1][0]}, {$my_array[1][1]}, {$my_array[1][2]}, {$my_array[1][3]}, {$my_array[1][4]} \n";
echo "3: {$my_array[2]} \n";
echo "3: {$my_array[3]} \n";
echo "3: {$my_array[4]} \n";
?>