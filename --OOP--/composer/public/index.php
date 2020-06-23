<?php

include '../vendor/autoload.php';

use App\Example\Calculator;

$calculator = new Calculator();

echo $calculator->setA(4)->setB(6)->sum();