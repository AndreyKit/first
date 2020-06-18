<?php

namespace Point;

class TDRectangle implements TDRectangleInterface
{
    protected $length;
    protected $width;
    protected $height;

    public function setLength(float $length): self
    {
        $this->length = $length;
        return $this;
    }

    protected function getLength()
    {
        return $this->length;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;
        return $this;
    }

    protected function getWidth()
    {
        return $this->width;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;
        return $this;
    }

    protected function getHeight()
    {
        return $this->height;
    }

    public function getArea(): float
    {
        $area = ($this->getLength() * $this->getWidth()) +
            ($this->getLength() * $this->getHeight()) +
            ($this->getHeight() * $this->getWidth());
        return  $area;
    }

    public function getVolume(): float
    {
        $volume = $this->getLength() * $this->getWidth() * $this->getHeight();
        return $volume;
    }
}
