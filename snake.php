<?php

// include_once 'point.php';

$my_array = array (
    0 => '     ',
    1 => '     ',
    2 => '     ',
    3 => '     ',
    4 => '     ',
);

class Point 
{
    public $x;
    public $y;
    public $sym;

    public function Draw ()
    {
        echo "x = $x; y = $y; sym = $sym";

        $my_array [$x][$y] = $sym;
        for ($i = 0; $i <= 4; $i++)
        {
            echo "$my_array [$i]";
        };
    }
}

$p1 = new Point();

$p1->x = 1;
$p1->y = 3;
$p1->sym = '*';
$p1->Draw ();

$p2 = new Point();

$p2->x = 4;
$p2->y = 5;
$p2->sym = '#';
$p2->Draw ();