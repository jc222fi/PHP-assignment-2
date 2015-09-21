<?php

namespace model;

class LoginModel{
    private $userCredentials;
    private $users;
    private $loginOK;

    public function __construct(Credentials $userCredentials, UserArray $users){
        $this->userCredentials = $userCredentials;
        $this->users = $users;
        $this->loginOK = false;
    }
    public function tryLogin(){
        if($this->userCredentials->getUserName()==null){
            $this->loginOK = false;
            //$this->loginStatus["MissingUsername"] = $this->statusMessage;
        }
        else if($this->userCredentials->getUserPassword()==null){
            $this->loginOK = false;
            //$this->loginStatus["MissingPassword"] = $this->statusMessage;
        }
        else{
            if(($this->users->getUserByName($this->userCredentials->getUserName())==null)||$this->users->getUserByName($this->userCredentials->getUserName())->getPassword()!=$this->userCredentials->getUserPassword()){
                $this->loginOK = false;
                //$this->loginStatus["NoMatch"] = $this->statusMessage;
            }
            else{
                $this->loginOK = true;
                //$this->loginStatus["Welcome"] = $this->statusMessage;
            }
        }
        return $this->loginOK;
    }
    public function getLoginOK(){
        return $this->loginOK;
    }
}