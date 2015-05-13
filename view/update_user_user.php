<?php
require_once '../model/UserModel.php';


$form = $_POST['FORM'];
$userModel=new UserModel();
$IdUser = htmlspecialchars($_POST["id_user"]);
$listeU = $userModel->updateuser_user($IdUser,$form);

?>