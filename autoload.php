<?php
function __autoload($className,$classname){
  echo "className:".$className."</br>";
  $filename = __DIR__ . "/Classes/" . $className . ".php";
  //echo "filename:".$file_name;
 
  if (is_readable($filename)){
    require $filename;
  }
}

?>