<?php

namespace Point;

interface TDRectangleInterface {

    public function setLength(float $length): self;
    public function setWidth(float $width): self;
    public function setHeight(float $height): self;
    public function getArea(): float;
    public function getVolume(): float;
}