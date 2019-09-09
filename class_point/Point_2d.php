<?php


class Point_2d
{
    protected $x = 0.0.'f';
    protected $y = 0.0.'f';
    protected $array =[];

    public function __toString()
    {
        return "toa do x: " . $this->x . " - toa do y" . $this->y;

    }

    public function setPoint2d($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getPoint2d(){
        return $this->x .' '. $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
        $this->array[0] =$x;
        $this->array[1] =$y;
    }
    public function getXY (){
        return $this->array;
    }
}