<?php

namespace model;

class Credentials{
    private $userName;
    private $userPassword;

    public function __construct($userName, $userPassword){
        $this->userName = $userName;
        $this->userPassword = $userPassword;
    }
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function setUserPassword($userPassword){
        $this->userPassword = $userPassword;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getUserPassword(){
        return $this->userPassword;
    }
}