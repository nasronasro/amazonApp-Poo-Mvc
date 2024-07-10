<?php
    include_once "Includes/Includer.inc.php";
    session_start();
    if(!isset($_SESSION["fullname"])){
        header("location:login.php");
        die();
    }
    include "Includes/HTML/header.inc.html";
    include "Includes/HTML/navbarAdmin.inc.html";   
    include "Includes/CategoryList.inc.php";
    include "Includes/HTML/footer.inc.html";