<?php 
function classAutoLoader($class){

    $the_path ="includes/{$class}.php";

   if(is_file($the_path) && !class_exists())
    
}



spl_autoload_register('classAutoLoader');