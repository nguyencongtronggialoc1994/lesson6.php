<?php
include 'Resizeable.php';
include 'shape/Shape.php';
include 'shape/Circle.php';
include 'shape/Rectangle.php';
include 'shape/Square.php';
$circle = new Circle("circle",10);
$rectangle = new Rectangle("rectangle",10,8);
$square = new Square("square",10);
echo $circle->resize(0.1)."<br>";
echo $rectangle->resize(0.2)."<br>";
echo $square->resize(0.5);