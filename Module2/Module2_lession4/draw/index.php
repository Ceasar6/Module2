<?php
include_once "Point2d/Point2d.php";
include_once "Point3d/Point3d.php";

$point2d = new Point2d(10,20);
echo "Tọa độ 2D là: " . $point2d . "<br/>";

$point3d = new Point3d(100,200,300);
echo "Tọa độ 3D là: " . $point3d;
