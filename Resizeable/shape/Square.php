<?php


class Square extends Shape implements Resizeable
{
public $width;
public function __construct($_name,$_width)
{
    parent::__construct($_name);
    $this->width = $_width;
}

    public function resize($number)
    {
       return $this->width+($this->width*$number);
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

}