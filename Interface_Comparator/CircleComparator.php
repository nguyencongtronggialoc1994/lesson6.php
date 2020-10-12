<?php
include 'Comparator.php';
include 'Circle.php';

class CircleComparator implements Comparator
{

    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if ($radiusOne > $radiusTwo) {
            return 1;
        } elseif ($radiusOne < $radiusTwo) {
            return -1;
        } else return 0;
    }
}