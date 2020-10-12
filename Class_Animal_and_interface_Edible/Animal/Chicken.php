<?php

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        echo "con cho";
    }

    function howtoEat()
    {
        echo "gam";
    }
}