<?php
/**
 * Created by PhpStorm.
 * User: Al fayeed
 * Date: 7/20/2017
 * Time: 10:55 AM
 */

$message="LGH4LEXQZI Confirmed. You have received Ksh4300 from Matata Juma 0723123456 on 17/7/2017 at 1:30 PM New M-PESA balance is Ksh 4500.34. Pay bills via M-PESA";

//echo stripos($message, "You");

$pos_Ksh = stripos($message, "Ksh");
$pos_from = stripos($message, "from");
$len =$pos_from - $pos_Ksh;
$amount = substr($message, $pos_Ksh, $len);

echo  $amount;

$pos_on = stripos($message, "juma");
$pos_at = stripos($message, "at ");
$len = $pos_on - $pos_at;
$dt = substr($message, $pos_on, $len);

echo $dt;
