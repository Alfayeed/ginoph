<?php
/**
 * Created by PhpStorm.
 * User: Al fayeed
 * Date: 7/20/2017
 * Time: 9:43 AM
 */
//strings
$data ="The quick fox jumped over a lazy dog";

$another ="This is another string";
//count
$chars =strlen($data);
echo "$chars <br>";
$words = str_word_count($another);
echo "$words <br>";
//convert to  uppercase
$upper = strtoupper($data);
echo "<br>$upper";

//substring
$sub = substr($data, 4 , 10);//su
echo "<br> $sub";

//replacing
$replace = str_replace("fox", "lion", $data);
echo "<br> $replace";

//hash data
$password = "kkk1234";
$hashed = md5($password);
echo "<br> $hashed";
echo "<br>";
echo crypt($password, "456fgrtyuaqw.k,/");

//$joined ="$data."".$another;//
//
//echo $joined;
//$other = " <br>$data $another";
//    echo $other;