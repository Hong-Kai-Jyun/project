<?php
    echo "classname:".$className."</br>";
function __autoload($className){    
  $file_name = __DIR__ . "/Classes/" . $className . ".php";
  echo "file_name:".$file_name."</br>";
    echo "classname:".$className."</br>";

    if(is_readable($file_name)){
         require $file_name;
    }
}

?>