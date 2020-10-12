<?php


class Circle
{
    public $name;
    public $radius;

    public function __construct($_name, $_radius)
    {
        $this->name = $_name;
        $this->radius = $_radius;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

}