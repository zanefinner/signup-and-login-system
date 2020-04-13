<?php
session_start();
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

require_once "Database.php";
require_once "Controllers/Users.php";
$db = new Database();
$ctrls=[
    'Users'=>new Controllers\Users($db),
];

switch ($uri[0]){
  case '';
    require 'Views/landing_page.php';
    break;
  case 'login';
    if(isset($_POST['uname'])){//sent form
        $ctrls['Users']->evaluate($_POST);
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
