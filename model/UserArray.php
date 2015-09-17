<?php

namespace model;

class UserArray{
    private $users = array();

    public function addUser(User $user){
        $this->users[] = $user;
    }
    public function getUsers(){
        return $this->users;
    }
    public function getUserByName($userName){
        foreach($this->users as $user){
            if($user->getName() == $userName){
                return $user;
            }
        }
    }
}