<?php

class UserCntr extends UserModel{
    public function LoginUser(string $username, string $password){
        $data = $this->GetUsers()->fetchAll();
        foreach($data as $line){
            if($username == $line["username"] && $password == $line["pass"]){
                session_start();
                $_SESSION["fullname"] = $line["fullname"];
                return $line;
            }
        }
        return false;
    }
}