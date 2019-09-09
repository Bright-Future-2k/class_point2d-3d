<?php
include_once('class_point/Point_2d.php');
include_once('class_point/Point_3d.php');

$point2d = new Point_2d();

$point2d->setX(2.2);
echo $point2d->getX() . "<br>";
$point2d->setY(2.2);
echo $point2d->getY() . "<br>";
$point2d->setXY(2.3, 2.3);
//echo $point2d->getXY() . "<br>";

echo $point2d->getPoint2d() . "<br>";

foreach ($point2d->getXY() as $value):
    echo $value . " ";
endforeach;
$point2d->setPoint2d(2.4, 2.4);

$point3d = new Point_3d();

$point3d->setX(2.0);
echo $point3d->getX() . "<br>";
$point3d->setY(2.0);
echo $point3d->getY() . "<br>";
$point3d->setXY(3.1, 3.1);
echo $point3d->getPoint3d() . "<br>";

foreach ($point3d->getXY() as $value):
    echo $value . " ";
endforeach;
$point3d->setZ(2.0);
echo $point3d->getZ() . "<br>";
$point3d->setXYZ(3.2, 3.2, 3.2);
echo $point3d->getPoint2d() . "<br>";

foreach ($point3d->getXYZ() as $value):
    echo $value . " ";
endforeach;
$point3d->setPoint3d(3.5, 3.5, 3.5);
echo $point3d->getPoint3d() . "<br>";

