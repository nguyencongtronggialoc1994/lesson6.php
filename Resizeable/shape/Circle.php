<?php


class Circle extends Shape implements Resizeable
{
public $radius;
public function __construct($_name,$_radius)
{
    parent::__construct($_name);
    $this->radius = $_radius;
}

    public function resize($number)
    {
        return $this->radius+($this->radius*($number/100));
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