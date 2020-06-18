<?php

namespace Point;

class Cube extends TDRectangle
{

    public function checkCube()
    {
        $result = "";
        if (
            $this->getLength() == $this->getHeight() &&
            $this->getLength() == $this->getWidth()
        ) {
            return $result .= "Это куб";
        } else {
            return $result .= "Это не куб";
        }
    }
}
