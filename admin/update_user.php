<?php
require_once '../model/UserModel.php';

$userModel=new UserModel();
$IdUser = htmlspecialchars($_POST["id_user"]);
$listeU = $userModel->updateuser($IdUser);
?>