<?php
include '../Point2d/Point2d.php';

class Point3D extends Point2D
{
    protected $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z): void
    {
        $this->z = $z;
    }
    public function getXYZ(){
        $arr[] = $this->x;
        $arr[] = $this->y;
        $arr[] = $this->z;
        return json_encode($arr);
    }
    public function setXYZ($x,$y,$z){
        $this->x = $x;
        $this->y =$y;
        $this->z =$z;
    }
    public function __toString()
    {
        return $this->getXYZ();
    }
}