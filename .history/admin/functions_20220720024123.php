<?php 
function classAutoLoader($class){

    $the_path ="includes/{$class}.php";

    if(file_exists($the_path)){
        require_once($the_path);
    }else{
        die("This file name {$class}.php was not man....");
    }
    
}



spl_autoload_register(classAutoLoader());