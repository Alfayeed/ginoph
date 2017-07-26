<?php
/**
 * Created by PhpStorm.
 * User: Al fayeed
 * Date: 7/21/2017
 * Time: 9:55 AM
 */

//arrays
$scores = array(89,91,90,78,67,45,67,76,75,52,54,65,12,43,87,67,87,89,84,54,46,36,32,21,87,76,75,74,73,73,72,87,88,68,87,56,94,76,8,95,75,76,78,84,79,86,54,56,57,58,59,67,68,69,70,65,64,63,62,61);
$size =count($scores);
echo "You have $size scores<br>";
$maxi = max($scores);
echo "The highest score is $maxi<br>";

//index position

echo "First mark is $scores[0]<br>";
echo "Second mark is $scores[1]<br>";
rsort($scores);  //sort--assend
echo "First mark after sorting is $scores[0]<br>";
echo "First mark after sorting is $scores[1]<br>";

$total = array_sum($scores);

echo "The sum is $total<br>";

//adding items

$scores[] =60;
$scores[] =45;
$scores[] =67;
$size = count($scores);

echo "The new size after adding $size<br>";

$names = array("John","Mike","Mark","Mary","Musa","Hellen","Saul");

echo count($names);
echo "<br>";
echo $names[2];
sort($names);
echo "<br>";

echo "<pre>";
var_dump($names);
echo "pre";


//indexed arrays

//keys == associative array

$person = array("names"=>"John Mark","age"=>19,"height"=>1.77);

echo "<br>";
echo $person["names"];
echo "<br>";
echo $person["age"];