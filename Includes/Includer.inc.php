<?php 
spl_autoload_register('myAuoLoader');
function myAuoLoader($className){
    $path = "Classes/";
    $extention = ".class.php";
    $fullpath = $path . $className . $extention;
    if(!file_exists($fullpath)){
        return false;
    }
    
    include_once $fullpath;
}
?>