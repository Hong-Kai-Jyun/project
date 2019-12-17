<?php

include "dog2.php";
include "dogtool.php";
class minidog extends dog{
     protected $age;
     //public $age;
    public function __construct($name,$color,$style,$age){

        parent::__construct($name,$color,$style);
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }


    public function dowork(){
        echo "吃~~~~~~~";
    }

    public function dogRun(){
        echo "狗狗搖晃..."; 
        parent::dogRun();
    }
   

    public function __destruct(){
        echo "吃飽就睡了...(汗";
    }
}
/*
class minidog2 implements Dogtool{

    public function seach(){
        echo "搜尋狗狗中...";
    }
}
*/
?>