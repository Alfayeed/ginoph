<?php
/**
 * Created by PhpStorm.
 * User: Al fayeed
 * Date: 7/21/2017
 * Time: 11:00 AM
 */

//area of an equilateral triangle side ==13   2dp
//volume of a cylinder of radius =9 and height =28.5
//volume of a sphere with d-61
//surface area of sphere with d-61


//area of equilateral triangle

$ar = sqrt(3)/4;
$s = pow(13,2);
$area = $ar*$s;
echo "$area<br>";
$rounded = round($area,2);
echo "Area of equilateral $rounded <br>";


//vol of cylinder

$p = pi();
$r = pow(9,2);
$h = 28.5;
$vol = $p*$r*$h;
echo "$vol<br>";
$ro = round($vol,2);
echo "Vol of Cylinder is $ro<br>";

//vol of sphere

$rs = pow(61,3);
$pie = pi();
$vo = 4/3;
$v = $vo*$pie*$rs;
echo "$v<br>";
$rou = round($v,2);
echo "Vol of sphere is $rou<br>";

//surface area of sphere

$a = (pi());
$re =pow(61,2);
$n = 4;
$areas = $n*$a*$re;
echo "$areas<br>";
$rnn = round($areas,2);
echo "Surface area is $rnn<br>";

