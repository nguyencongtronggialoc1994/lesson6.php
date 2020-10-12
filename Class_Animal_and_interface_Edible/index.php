<?php
include 'Interface/Edible.php';
include 'Abstract_class/Animal.php';
include 'Abstract_class/Fruit.php';
include 'Animal/Chicken.php';
include 'Animal/Tiger.php';
include 'Fruit/Apple.php';
include 'Fruit/Orange.php';

$animal[0] = new Chicken();
$animal[1] = new Tiger();
foreach ($animal as $value) {
    echo $value->makeSound();
}
$orange = new Orange();
$apple = new Apple();
echo $orange->howtoEat()."/".$apple->howtoEat();
