<?php
function __autoload($classname){
  echo "className:".$classname."</br>";
  $filename = __DIR__ . "/Classes/" . $classname . ".php";
  //echo "filename:".$file_name;
 
  if (is_readable($filename)){
    require $filename;
  }
}

?>