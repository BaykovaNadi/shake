<?php

include_once "point.php";

$p1 = new Point(1, 2, "*");
$p1->drawPoint();

$p2 = new Point(3, 4, "#");
$p2->drawPoint();

$screenSnake = array();
$screenSnake[] = 1;
$screenSnake[] = 2;
$screenSnake[] = 3;
$screenSnake[] = $p1;
$screenSnake[] = $p2;
print_r($screenSnake);

foreach ($screenSnake as $key => $value){
    print_r ("key = $key; value = $value; $screenSnake[$key] \n");
}

unset($screenSnake);
print_r($screenSnake);
?>