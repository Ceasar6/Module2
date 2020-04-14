<?php

include_once 'class/Point.php';
include_once 'class/MovablePoint.php';

$movablePoint = new MovablePoint(10, 10, 20);
echo $movablePoint->toString() . "<br>";
$movablePoint->move() . "<br>";
echo $movablePoint->toString();