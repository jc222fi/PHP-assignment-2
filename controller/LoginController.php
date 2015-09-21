<?php

namespace controller;

class LoginController{
    private $users;
    private $userCredentials;
    private $loginModel;
    private $loginView;
    private $layoutView;
    private $dateTimeView;
    private $loginOK = false;

    public function __construct(\model\UserArray $users){
        $this->users=$users;
        $this->layoutView = new \view\LayoutView();
        $this->loginView = new \view\LoginView($this->users);
        $this->dateTimeView = new \view\DateTimeView();
    }
    public function doApplication(){
        if($this->loginView->userWantsToLogin()){
            $this->userCredentials = new \model\Credentials($this->loginView->getProvidedUsername(), $this->loginView->getProvidedPassword());
            $this->loginModel = new \model\LoginModel($this->userCredentials, $this->users);
            $this->loginModel->tryLogin();
            $this->loginOK = $this->loginModel->getLoginOK();
            $this->loginView->presentLoginMessage($this->userCredentials);
            //$inputName = $this->loginView->checkUserLogin($this->loginView->getProvidedUsername(), $this->loginView->getProvidedPassword());

            $this->loginView->response();
        }
    }
    public function getView(){
        if($this->loginOK){
            return $this->layoutView->render(true, $this->loginView, $this->dateTimeView);
        }
        else{
            return $this->layoutView->render(false, $this->loginView, $this->dateTimeView);
        }
    }
}