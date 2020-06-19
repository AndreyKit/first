<?php

namespace Point;

interface TDRectangleInterface {

    public function setLength(float $length);
    public function setWidth(float $width);
    public function setHeight(float $height);
    public function getArea(): float;
    public function getVolume(): float;
}