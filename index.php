<?php
session_start();
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

require_once "Database.php";
require_once "Controllers/Users.php";
//$db = new Database();


switch ($uri[0]){
  case '';
    $title="";
    echo '<a href="/login">Login</a><br><a href="/signup">Signup</a>';
  break;
  default:
    echo 'Bad Route';
}
?></body></html>
