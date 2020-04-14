<?php


class Point2D
{
    protected $x;
    protected $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }
    public function getXY(){
        $arr[] = $this->x;
        $arr[] = $this->y;
        return json_encode($arr);
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y =$y;
    }

    public function __toString()
    {
      return $this->getXY();
    }
}