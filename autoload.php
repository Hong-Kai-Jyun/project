<?php
function __autoload($className){
  echo "className:".$className;
  $filename = __DIR__ . "/Classes/" . $className . ".php";
  echo "filename:".$file_name;
 
  if (is_readable($filename)){
    require $filename;
  }
}
?>