<?php
    include_once "Includes/Includer.inc.php";
    session_start();
    
    include "Includes/HTML/header.inc.html";
    include "Includes/HTML/navbar.inc.html";
    
    if(isset($_SESSION["fullname"])){
        echo "Bonjour ".$_SESSION["fullname"];
    }

    include "Includes/HTML/footer.inc.html";