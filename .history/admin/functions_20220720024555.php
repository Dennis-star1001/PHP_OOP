<?php 
function classAutoLoader($class){

    $the_path ="includes/{$class}.php";

   
    
}



spl_autoload_register('classAutoLoader');