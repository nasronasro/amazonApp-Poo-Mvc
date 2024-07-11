<?php 
spl_autoload_register('myAuoLoader');
function myAuoLoader($className){
    $path = ["Classes/","../Classes/"];
    $i=0;
    $extention = ".class.php";
    $fullpath = "";
    while(!file_exists($fullpath) && $i < count($path)){
        $fullpath = $path[$i] . $className . $extention;
        $i++;
    }

    if(!file_exists($fullpath)){ 
        return false;
    }
    
    include_once $fullpath;
}
?>