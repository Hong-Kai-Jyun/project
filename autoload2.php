<?php
function __autoload($classname){    
  $file_name = __DIR__ . "/Classes/" . $classname . ".php";
    echo "file_name:".$file_name;
    echo "classname:".$classname;
/*
    if(is_readable($file_name)){
         require $file_name;
    }*/
}

?>