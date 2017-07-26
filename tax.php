<?php
/**
 * Created by PhpStorm.
 * User: Al fayeed
 * Date: 7/19/2017
 * Time: 9:54 AM
 */

//Tax
$s = 15430;
if ($s>0 and $s<=585){
    echo "<br> tax is 0";
    echo "<br> net $s";
}
else if ($s>=586 and $s<=1650)
{
    $t= 0.1 * $s;
    echo "<br> tax is $t";
    $n= $s - $t;
    echo "<br>net $n";
}
else if ($s>=1651 and $s<=3145)
{
    $t= 0.15 * $s;
    echo "<br> tax is $t";
    $n= $s - $t;
    echo "<br>net $n";
}else if ($s>=3146 and $s<=5195)
{
    $t= 0.2 * $s;
    echo "<br> tax is $t";
    $n= $s - $t;
    echo "<br>net $n";
}
else if ($s>=5196 and $s<=7758)
{
    $t= 0.25 * $s;
    echo "<br> tax is $t";
    $n= $s - $t;
    echo "<br>net $n";
}
else if ($s>=7759 and $s<=10833)
{
    $t= 0.3 * $s;
    echo "<br> tax is $t";
    $n= $s - $t;
    echo "<br>net $n";
}
else if($s>10833)
{
    $t= 0.35 * $s;
    echo "<br> tax is $t";
    $n= $s - $t;
    echo "<br>net $n ";
}

