<?php

include 'src/autoload.php';

use Point\Point;
use Point\Line;
use Point\Rectangle;
use Point\Square;
use Point\Triangle;
use Point\RightTriangle;
use Point\TDRectangle;
use Point\Cube;

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

// $pointA  = new Point();
// $pointB  = new Point();
// $pointC  = new Point();

// $pointA->setX(10)
//     ->setY(10);

// $pointB->setX(10)
//     ->setY(20);

// $pointC->setX(20)
//     ->setY(10);

// $triangle = new Triangle();

// $triangle
//     ->setPointA($pointA)
//     ->setPointB($pointB)
//     ->setPointC($pointC);

// // echo $triangle->getArea();

// // echo "<br>";

// echo $triangle->getPerimeter();
// // echo "<br>";

// // $rightTriangle = new RightTriangle();

// // $rightTriangle
// //     ->setPointA($pointA)
// //     ->setPointB($pointB)
// //     ->setPointC($pointC);

// // echo $rightTriangle->getArea();

// // echo "<br>";

// // echo $rightTriangle->getPerimeter();
// // echo "<br>";

$TDRectangle = new TDRectangle();

$TDRectangle
    ->setLength(10)
    ->setWidth(5)
    ->setHeight(15);
    
echo "Площадь поверхности = " . $TDRectangle->getArea();

echo "<br>";

echo "Объем = " . $TDRectangle->getVolume();

echo "<br>";

$cube = new Cube();

echo $cube->setLength(5)
->setWidth(5)
->setHeight(5)->checkCube();
