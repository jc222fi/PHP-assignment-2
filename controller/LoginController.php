<?php

namespace controller;

class Login{
    private $loginView;
    private $users;
    private $inputUsername;

    public function __construct(\view\LoginView $lv, \model\UserArray $users){
        $this->loginView = $lv;
        $this->users = $users;
    }
}