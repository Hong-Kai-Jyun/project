<?php
function __autoload($className){    
  $file_name = __DIR__ . "/Classes/" . $className . ".php";
  echo "file_name:".$file_name;
    echo "classname:".$className;
/*
    if(is_readable($file_name)){
         require $file_name;
    }*/
}

?>