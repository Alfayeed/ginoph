<?php
//functionality->functions
//power, square root, round
echo pow(2,3);  //pow(2,3)
$p = pow(4.5,3.22);  //arguments or parameters
echo "<br> $p";

$rounded = round($p, 1);  //roxund(19.66,1
echo "<br> $rounded";

//squareroot

$sq = sqrt(33);
$sq = round($sq, 2);
echo "<br> $sq";

echo "<br>";
echo rand(1000000,2000000);