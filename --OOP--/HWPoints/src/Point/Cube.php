<?php

namespace Point;

class Cube extends TDRectangle
{

    public function checkCube()
    {
        if (
            $this->length === $this->height &&
            $this->length === $this->width
        ) {
            $result = "Это куб $this->length $this->height $this->width";
        } else {
            $result = "Это не куб $this->length $this->height $this->width";

        }
        return $result;
    }
}
