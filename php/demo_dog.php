<?php
include "dog2.php";

$myDog = new dog("月月","棕色","柴犬");
$myDog->dogRun();
$myDog->dogBark();
echo "狗狗叫 : ".$myDog->$name."</br>";

include "minidog.php";
$mydog2 = new minidog("小月月","灰色","二哈混柴犬",0.2);
echo "第二隻狗的名子叫 :".$mydog2->name."</br>";
echo "他的顏色是 : ".$mydog2->colog."</br>";
echo "他的品種 : ".$mydog2->style."</br>";
echo "讓他去~~~~".$mydog2->dowork."</br>之後就... ";