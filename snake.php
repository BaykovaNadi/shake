<?php

include_once "point.php";

$my_array = array(
    0 => "- - - - -",
    1 => "- - - - -",
    2 => "- - - - -",
    3 => "- - - - -",
    4 => "- - - - -",
);

echo ("$my_array[0] \n");

$p = new Point();

$p->$x = 1;
$p->$y = 1;
$symb1 = "*";
$p->$my_array[$x][$y] = $symb1;
$p->drawPoint();

?>