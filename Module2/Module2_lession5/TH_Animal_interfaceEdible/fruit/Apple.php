<?php

include_once '../abstractClass/Fruits.php';
class Apple extends Fruits
{
    public function howToEat()
    {
        return "Apple could be slided";
    }
}