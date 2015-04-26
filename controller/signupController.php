<?php 
require '../model/UserModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$usermodel = new UserModel();
	$usermodel -> ajouterUser();
	$url = "../view/index.php";
	header('location:'.$url);
}