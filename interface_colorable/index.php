<?php
include 'Colorable.php';
include 'shape/Shape.php';
include 'shape/Circle.php';
include 'shape/Rectangle.php';
include 'shape/Square.php';
$circle = new Circle("circle",10);
$rectangle = new Rectangle("rectangle",15,10);
$square = new Square("square",10);
echo $circle->area()."<br>";
echo $circle->perimeter()."<br>";
echo $rectangle->area()."<br>";
echo $rectangle->perimeter()."<br>";
echo $square->area()."<br>";
echo $square->howToColor();
