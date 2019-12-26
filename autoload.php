<?php

function __autoload($classname){
    $file_name = __DIR__ . "/Classes/" . $classname . ".php";
    echo "classname:".$classname;
    echo "file_name:".$file_name;

 /*   if(is_readable($file_name)){
         require $file_name;
    }*/
}

?>