<?php
include_once "Includes/Includer.inc.php";

include "Includes/HTML/header.inc.html";
include "Includes/HTML/navbar.inc.html";

if(isset($_POST["username"])){
    $user = new UserView;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user->VerifyUser($username,$password); 
    header("location:index.php");
    
}

include "Includes/HTML/loginForm.inc.html";
include "Includes/HTML/footer.inc.html";