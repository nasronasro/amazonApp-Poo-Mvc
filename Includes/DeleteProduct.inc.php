<?php
include_once "Includer.inc.php";
session_start();
if(!isset($_POST["idDel"])){
    echo "failed";   
    die();
}
$product = new ProductView;
$product->DeleteProduct($_POST["idDel"]);
echo "success";
