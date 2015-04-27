<?php
require_once '../model/UserModel.php';

$userModel=new UserModel();
$search = htmlspecialchars($_GET["reche"]);
$listeU = $userModel->rechercheuser($search);
echo json_encode($listeU);
?>
