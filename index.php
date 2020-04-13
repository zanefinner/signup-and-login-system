<?php
session_start();
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

require_once "Database.php";
require_once "Controllers/Users.php";
require_once "Models/Users.php";
$db = new Database();
$mdls=[
    'Users'=> new Models\Users($db)
];
$ctrls=[
    'Users'=>new Controllers\Users($mdls['Users']),
];


switch ($uri[0]){
  case '';
    require 'Views/landing_page.php';
    break;
  case 'login';
    if(isset($_POST['uname'])){//sent form
        if($ctrls['Users']->evaluate($_POST)){
            $ctrls['Users']->create_new($_POST);
        }else{
            echo 'login invalid';
        }
    }else{//not sent form
        $ctrls['Users']->send_form();
    }
    break;
  case 'signup';
    break;
  default:
    echo 'Bad Route';
}
?></body></html>
