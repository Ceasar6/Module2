<?php
include_once '../abstractClass/Animal.php';
include_once '../InterfaceClass/Edible.php';

class Chicken
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat()
    {
        return "could be fried";
    }
}