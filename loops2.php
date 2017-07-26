<?php
/**
 * Created by PhpStorm.
 * User: Al fayeed
 * Date: 7/24/2017
 * Time: 9:48 AM
 */

//loops
//for, while, do-while, foreach
//modify prints even numbers


/*$scores = array(1,7,12,17,22,27,32,37,42,47,52);
foreach ($scores as $marks)
{
    echo "$marks<br>";
}*/


//add numbers btn 1 and 20
/*$s = 0;
for ($i=1; $i<=20; $i++)
{
$s += $i;
    echo "$s<br>";
}*/

//prime nos btn 20 and 50

for ($x=20; $x<=50; $x++)
{
    for ($d=2; $d<$x; $d++)
    {
        if ($x % $d == 0)
        {
            break;
        }
    }
    if($x == $d)
        echo "$x<br>";
}






/*
$marks = array(56,76,89,90,95,74,71,86,45,43,52,64,72,74,79,76,51,52,53,54,55,56,57,58,59,60);
foreach ($marks as $x)
{
    if($x % 2 == 0)
    echo "$x<br>";
}*/










/*$k=-50;
do
{
    echo "$k<br>";
    $k++;

}
while($k<=50);*/




/*$x = 200;     x=10
while ($x>=10)  //x<=200
{
    echo "$x<br>";
    $x-=1;              x+=1
}*/








/*for ($y=1; $y<=200; $y+=1)
{
    $square = pow($y, 2);
    $root = sqrt($y);
    $root = round($root, 2);
    echo "The square of $y is $square and the root is $root<br>";
}*/


/*for($x=0; $x<=100; $x+=2)
{
    echo "$x<br>";

}*/