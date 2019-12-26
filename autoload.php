<?php

function __autoload($classname){
    $file_name = ___DIR___."/Classes/".$classname.".php";
    if(is_readable($file_name)){
         require $file_name;
    }
}

?>