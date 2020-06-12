<?php

include 'src/autoload.php';

use Point\Point;
//use Point\Line;
//use Point\Square;
use Point\Triangle;
use Point\RightTriangle;

// $startPoint = new Point();
// $endPoint = new Point();

// $startPoint
//     ->setX(3)
//     ->setY(4);

// $endPoint
//     ->setX(8)
//     ->setY(10);

// $line = new Line();

// $line
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

// $startPoint
//     ->setX(0)
//     ->setY(0);


// echo $line->getLength();

//$square = new Square();

//$square
//->setStartPoint($startPoint)
//->setEndPoint($endPoint);

//echo $square->getPerimeter();

$pointA  = new Point();
$pointB  = new Point();
$pointC  = new Point();

$pointA->setX(0)
    ->setY(0);

$pointB->setX(0)
    ->setY(3);

$pointC->setX(3)
    ->setY(0);

$triangle = new Triangle();

$triangle
    ->setPointA($pointA)
    ->setPointB($pointB)
    ->setPointC($pointC);

// echo $triangle->getArea();

// echo "<br>";

echo $triangle->getPerimeter();
// echo "<br>";

// $rightTriangle = new RightTriangle();

// $rightTriangle
//     ->setPointA($pointA)
//     ->setPointB($pointB)
//     ->setPointC($pointC);

// echo $rightTriangle->getArea();

// echo "<br>";

// echo $rightTriangle->getPerimeter();
// echo "<br>";
