<?php

function __autoload($classname){
    $file_name = __DIR__."/Classes/".$classname.".php";
    if(is_readable($file_name)){
         require $file_name;
    }
}

?>