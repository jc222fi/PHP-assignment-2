<?php

//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');

require_once('model/User.php');
require_once('model/UserArray.php');

require_once('controller/LoginController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$user = new \model\User("Admin", "Password");
$users = new model\UserArray();
$users->addUser($user);

//CREATE OBJECTS OF THE VIEWS
$v = new \view\LoginView($users);
$dtv = new \view\DateTimeView();
$lv = new \view\LayoutView();


$lv->render(false, $v, $dtv);

