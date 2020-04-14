<?php
include_once 'Point.php';

class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x = 0.0, $y = 0.0, $xSpeed = 0.0, $ySpeed = 0.0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->getXSpeed(), $this->getYSpeed()];
    }

    function toString()
    {
        return parent::toString() . ", speed = ($this->xSpeed, $this->ySpeed)";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->getX() . $this->getY();
    }

}