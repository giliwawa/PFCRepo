<?php
require_once '../model/UserModel.php';
$id_user = htmlspecialchars($_GET["IdUser"]);
$userModel = new UserModel();
$userModel->deleteUser($id_user);

?>