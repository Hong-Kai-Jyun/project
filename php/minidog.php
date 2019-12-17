<?php

include "dog2.php";

class minidog extends dog{
     protected $age;
     //public $age;
    public function __construct($name,$color,$style,$age){

        parent::__construct($name,$color,$style);
        $this->age = $age;
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

?>