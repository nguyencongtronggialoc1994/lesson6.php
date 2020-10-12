<?php


class Shape
{
public $name;
public function __construct($_name)
{
    $this->name = $_name;
}

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}