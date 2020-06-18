<?php

namespace Point;

class Triangle implements TriangleInterface
{

    protected $pointA;
    protected $pointB;
    protected $pointC;

    public function setPointA(Point $pointA): object
    {
        $this->pointA = $pointA;

        return $this;
    }

    public function setPointB(Point $pointB): object
    {
        $this->pointB = $pointB;

        return $this;
    }

    public function setPointC(Point $pointC): object
    {
        $this->pointC = $pointC;

        return $this;
    }

    protected function getSide(Point $pointOne, Point $pointTwo)
    {
        $a = $pointOne->getX() - $pointTwo->getX();
        $b = $pointOne->getY() - $pointTwo->getY();

        return sqrt($a ** 2 + $b ** 2);
    }

    protected function getAB(): float
    {
        return $this->getSide($this->pointA, $this->pointB);
    }

    protected function getBC(): float
    {
        return $this->getSide($this->pointB, $this->pointC);
    }

    protected function getAC(): float

    {
        return $this->getSide($this->pointA, $this->pointC);
    }

    protected function checkPoints(): bool
    {
        if (
            isset($this->PointA) &&
            isset($this->PointB) &&
            isset($this->PointC)
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function getPerimeter(): float
    {
        if ($this->checkPoints()) {
            return ($this->getAB()) + ($this->getBC()) + ($this->getAC());
        } else {
            echo "Ошибка";
            return -1;
        }
    }

    private function getHalfPerimeter(): float
    {
        return $this->getPerimeter() / 2;
    }

    public function getArea(): float
    {
        return sqrt($this->getHalfPerimeter() *
            ($this->getHalfPerimeter() - $this->getAB()) *
            ($this->getHalfPerimeter() - $this->getBC()) *
            ($this->getHalfPerimeter() - $this->getAC()));
    }
}
