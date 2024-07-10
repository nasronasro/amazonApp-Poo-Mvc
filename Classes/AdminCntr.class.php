<?php

class AdminCntr extends AdminModel{
    public function LoginAdmin(string $username, string $password){
        $data = $this->GetAdmins()->fetchAll();
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