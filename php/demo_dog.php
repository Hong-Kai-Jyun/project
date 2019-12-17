<?php
/*
include "dog2.php";

$myDog = new dog("月月","棕色","柴犬");
$myDog->dogRun();
$myDog->dogBark();
echo "狗狗的名子是 : ".$myDog->name."</br>";
*/
include "minidog.php";

$mydog2_s = new minidog2();
echo "使用手機連線狗狗定位: ".$mydog2_s->seach()."</br>";



$mydog2 = new minidog("小月月","灰色","二哈混柴犬","0.2");
echo "第二隻狗的名子叫 :".$mydog2->name."</br>";
echo "牠的顏色是 : ".$mydog2->color."</br>";
echo "目前".$mydog2->getAge()."歲</br>";
echo "牠的品種 : ".$mydog2->style."</br>讓他去~~~~";
$mydog2->dogRun();
echo $mydog2->dowork()."</br>之後就... ";


?>