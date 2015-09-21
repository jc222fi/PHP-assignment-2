<?php

namespace model;

class UserArray{
    private $users = array();

    public function addUser(User $user){
        $this->users[$user->getName()] = $user;
    }
    public function getUsers(){
        return $this->users;
    }
    public function getUserByName($userName){
        if(isset($this->users[$userName])){
            return $this->users[$userName];
        }
        return null;
    }
}