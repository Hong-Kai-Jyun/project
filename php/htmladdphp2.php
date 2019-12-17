<?php

 class mycalss{
     public $x = 1234;
     protected $y ="Spring";
     private $z = "kkk";

     public function getpara(){
         echo "inclass->x : ".$this->x."</br>";
         echo "inclass->y : ".$this->y."</br>";
         echo "inclass->z : ".$this->z."</br>";
     }
 }

 $test = new mycalss;
 $test->getpara();
 echo "test->x : ".$test->x."</br>";
 echo "test->y : ".$test->y."</br>";
 echo "test->z : ".$test->z."</br>";

?>