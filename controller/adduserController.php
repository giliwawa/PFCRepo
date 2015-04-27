<?php 
require '../model/UserModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$usermodel = new UserModel();
	$usermodel -> ajouterAdminUser();
}