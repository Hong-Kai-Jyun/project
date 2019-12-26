<?php
function __autoload($className){
  echo "className:".$className."</br>";
  $filename = __DIR__ . "/Classes/" . $className . ".php";
  //echo "filename:".$file_name;
 
  if (is_readable($filename)){
    require $filename;
  }
}

function __autoload($classname){    
  echo "className:".$className."</br>";
  $file_name = __DIR__ . "/Classes/" . $classname . ".php";
    echo "file_name:".$file_name;
    echo "classname:".$classname;
}
?>