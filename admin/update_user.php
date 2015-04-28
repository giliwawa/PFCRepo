<?php
require_once '../model/UserModel.php';

$userModel=new UserModel();
$IdUser = htmlspecialchars($_GET["IdUser"]);
$listeU = $userModel->updateuser($IdUser);
?>