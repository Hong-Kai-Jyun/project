<?php
include "dog2.php";

$myDog = new dog("月月","棕色","柴犬");
$myDog->dogRun();
$myDog->dogBark();
echo "狗狗叫 : ".$myDog->$name."</br>";