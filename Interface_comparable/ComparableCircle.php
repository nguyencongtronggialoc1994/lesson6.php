<?php
include 'Comparable.php';
include 'Circle.php';


class ComparableCircle extends Circle implements Comparable
{
    public function __construct($_name, $_radius)
    {
        parent::__construct($_name, $_radius);
    }

    public function compareTo($objOther)
    {
        $circleOtherRadius = $objOther->getRadius();
        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        } else if ($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}