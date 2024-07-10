<?php

class UserView extends UserCntr{

    private $fullname = "undefined";
    
    public function VerifyUser($username,$password){
        if($this->LoginUser($username,$password) != false){
            $this->fullname = $this->LoginUser($username,$password)["fullname"];
            return true;
        }
        else 
            return false;
    }
    public function DisplayUser(){
        if($this->fullname != "undefined"){
            echo $this->fullname;
        }
    }
}