<?php

//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');

require_once('model/User.php');
require_once('model/UserArray.php');
require_once('model/Credentials.php');
require_once('model/LoginModel.php');

require_once('controller/LoginController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$users = new \model\UserArray();
$user = new \model\User("Admin", "Password");

$users->addUser($user);
$controller=new \controller\LoginController($users);
$controller->doApplication();
$controller->getView();

//CREATE OBJECTS OF THE VIEWS
// $v = new \view\LoginView($users);
// $dtv = new \view\DateTimeView();
// $lv = new \view\LayoutView();

// $lv->render(false, $v, $dtv);
