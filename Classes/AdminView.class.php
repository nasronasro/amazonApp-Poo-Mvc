<?php

class AdminView extends AdminCntr{

    private $fullname = "undefined";
    
    public function VerifyAdmin($username,$password){
        if($this->LoginAdmin($username,$password) != false){
            $this->fullname = $this->LoginAdmin($username,$password)["fullname"];
            return true;
        }
        else 
            return false;
    }
    public function DisplayAdmin(){
        if($this->fullname != "undefined"){
            echo $this->fullname;
        }
    }
}