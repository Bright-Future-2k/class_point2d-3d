<?php
include_once('Point_2d.php');
class Point_3d extends Point_2d{
    public $z = 0.0.'f';

    public function __toString()
    {

        return parent::__toString() . "toa do z:" . $this->z;
    }

    public function setPoint3d ($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getPoint3d (){
        return "toa do x: " . $this->x . " - toa do y: " . $this->y . " - toa do z: " . $this->z;
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setXYZ($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        $this->array[0] =$x;
        $this->array[1] =$y;
        $this->array[2] =$z;
    }
    public function getXYZ(){
        return $this->array;
    }
}