<?php


class Rectangle
{
    public $width;
    public $height;

    function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;

    }

    function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    function getArea()
    {
        return ($this->width * $this->height);
    }

    function render()
    {
        for($i=0; $i < $this->height; $i++){
            for($j=0; $j < $this->width; $j++){
                echo "*";
            }
            echo "<br>";
        }

    }
}