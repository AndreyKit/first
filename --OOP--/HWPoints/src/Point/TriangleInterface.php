<?php

namespace Point;

interface TriangleInterface {

   public function setPointA(Point $pointA): object;

   public function setPointB(Point $pointB): object;

   public function setPointC(Point $pointB): object;

   public function getPerimeter(): float;
   
   public function getArea(): float;

}