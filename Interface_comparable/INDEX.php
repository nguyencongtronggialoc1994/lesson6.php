<?php
include 'ComparableCircle.php';
$circleOne = new ComparableCircle("circle1",10);
$circleTwo = new ComparableCircle("circle1",5);
var_dump($circleOne->compareTo($circleTwo));