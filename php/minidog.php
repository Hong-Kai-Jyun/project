<?php

include "dog2.php";

class minidog extends dog{
    protected $age;

    public function __construct($name,$color,$style,age){

        parent::__construct($name,$color,$style);
        $this->age = $age;
    }

    public function dowork(){
        echo "吃~~~~~~~";
    }

    public function __destruct(){
        echo "吃飽就睡了...(汗";
    }
}

?>