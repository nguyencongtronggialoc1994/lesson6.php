<?php


class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($_name, $_width, $_height)
    {
        parent::__construct($_name);
        $this->width = $_width;
        $this->height = $_height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function area()
    {
        return $this->width * $this->height;
    }

    public function perimeter()
    {
        return ($this->width + $this->height) * 2;
    }

}