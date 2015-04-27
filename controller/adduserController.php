<?php 
require '../model/UserModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$usermodel = new UserModel();
	$usermodel -> ajouterAdminUser();
	$url = "../admin/admin.php";
	header('location:'.$url);
}