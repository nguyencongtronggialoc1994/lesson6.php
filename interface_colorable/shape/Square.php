<?php


class Square extends Shape implements Colorable
{
    public $width;

    public function __construct($_name, $_width)
    {
        parent::__construct($_name);
        $this->width = $_width;
    }

    public function howToColor()
    {
        echo "Color all four sides..";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->width;
    }

    public function perimeter()
    {
        return $this->width * 4;
    }

}