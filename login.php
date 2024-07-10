<?php
include_once "Includes/Includer.inc.php";

include "Includes/HTML/header.inc.html";
include "Includes/HTML/navbar.inc.html";

if(isset($_POST["username"])){
    $admin = new AdminView;
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(!$admin->VerifyAdmin($username,$password)){
        $user = new UserView;
        if($user->VerifyUser($username,$password)){
            header("location:index.php");
            die();
        }
    }else{
        header("location:ProductList.php");
        die();
    }

}

include "Includes/HTML/loginForm.inc.html";
include "Includes/HTML/footer.inc.html";