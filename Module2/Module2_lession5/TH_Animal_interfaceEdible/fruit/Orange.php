<?php
include_once '../abstractClass/Fruits.php';

class Orange extends Fruits
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}