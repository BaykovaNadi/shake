<?php

include_once "point.php";

// $p1 = new Point(1, 2, "*");
// $p1->drawPoint();

// $p2 = new Point(3, 4, "#");
// $p2->drawPoint();

// tranning

$x = 1;
Func1( $x );
echo "Call Func1. x = $x  \n";

$x = 1;
Func2( $x );
echo "Call Func2. x = $x \n";

$x = 1;
Func3( $x );
echo "Call Func3. x = $x \n";

$p1 = new Point( 1, 3, '*' );
Move( $p1, 10, 10 );
echo "Call Move. p1.x = $p1->x,  p1.y = $p1->y \n";

$p2 = new Point( 4, 5, '#' );
$p1 = $p2;
$p2->x = 8;
$p2->y = 8;
echo "p1 = p2: p1.x = $p1->x,  p1.y = $p1->y, p2.x = $p2->x, p2.y = $p2->y \n";

$p1 = new Point( 1, 3, '*' );
Update( $p1 );
echo "Call Update. p1.x = $p1->x, p1.y = $p1->y \n";
$p1 = Update1( $p1 );
echo "Call Update1. p1.x = $p1->x, p1.y = $p1->y \n";

function Func1( $value )
{

}

function Func2( int $value )
{
$value = $value + 1;
}

function Func3( int $x )
{
$x = $x + 1;
}

function Move( $p, $dx, $dy )
{
$p->x = $p->x + $dx;
$p->y = $p->y + $dy;
}

function Update( $p )
{
$p = new Point( 0, 0, '');
}

function Update1 ( $p )
{
return $p = new Point( 0, 0, '');
}


?>