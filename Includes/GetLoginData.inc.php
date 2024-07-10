<?php 
session_start();

if(isset($_SESSION["fullname"]))
    echo $_SESSION["fullname"];
else
    echo "<a href='login.php' class='btn btn-outline-success my-2 my-sm-0'>Login</button>";