<?php 


function  my_autoloader($class){
    $class = strtolower($class);
    $the_path ="includes/{class}.php";

    if(file_exists($the_path)){
        require_once($the_path);
    }else{
        die("This file name {$cass}.php was not man....");
    }
}
spl_autoload_register('my_autoloader');