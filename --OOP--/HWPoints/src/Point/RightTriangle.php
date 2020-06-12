<?php

namespace Point;

class RightTriangle extends Triangle
{

    public function setPointC(Point $pointC): object
    {
        $ab = $this->getSide($this->pointA, $this->pointB);
        $bc = $this->getSide($this->pointB, $pointC);
        $ac = $this->getSide($this->pointA, $pointC);

        if (($ab ** 2 === $bc ** 2 + $ac ** 2) ||
            ($bc ** 2 === $ab ** 2 + $ac ** 2) ||
            ($ac ** 2 === $bc ** 2 + $ab ** 2)
        ) {
            parent::setPointC($pointC);
        }else {
            echo "Ошибка";
        }

        return $this;
    }

}
