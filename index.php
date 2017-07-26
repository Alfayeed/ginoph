<?php

//Conditional Statements (if)
//Comparison perators
//maths



    //bmi

 $w=45;
 $h=1.6;

 $result = $w/pow($h, 2);
 //echo $result
 if ($result < 16){
     echo "You are severely thin";
 }
 elseif ($result>=16 and $result <17){
     echo "You are moderate thin";
 }
 elseif ($result>=17 and $result <18.5){
     echo "You are mildly thin";
 }
 elseif ($result>=18.5 and $result <25){
     echo "You are normal";
 }
 elseif ($result>=25 and $result <30){
     echo "You are over weight";
 }
 elseif ($result>=30 and $result <35){
     echo "You are obese class I";
 }
 elseif ($result>=35 and $result <40){
     echo "You are obese class II";
 }
 else{
     echo "You are obese class III";
 }