<?php
require_once '../model/UserModel.php';
$user_email=$_POST['mail'];
$user_new_pass=$_POST['passw'];
$userModel=new UserModel();
$user=new user();
$user->setEmail($user_email);
$user->setPassword($user_new_pass);
$userModel->modifyPassword($user);
require_once 'mailController.php';
?>