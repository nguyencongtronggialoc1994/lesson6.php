<?php


class Circle extends Shape
{
    public $radius;

    public function __construct($_name, $_radius)
    {
        parent::__construct($_name);
        $this->radius = $_radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
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
        return pi() * pow($this->radius, 2);
    }

    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }
}