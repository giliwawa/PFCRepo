<?php 
require '../model/UserModel.php';
session_start();
$usermodel = new UserModel();
$username=$_POST['username'];
$password=$_POST['password'];
$Us = $usermodel -> getlogin($username,$password);
if($Us === 0){
	header('location:'.'http://www.google.com'); //a modifier vers url erreur login
}
else{

	if(!isset($_SESSION['username']) && !isset($_SESSION['password']) ){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$url = $_SERVER['HTTP_REFERER'];
		header('location:'.$url);
	}
}
 ?>