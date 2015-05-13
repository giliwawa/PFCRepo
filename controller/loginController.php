<?php 
require '../model/UserModel.php';
require_once 'secure.php';

$usermodel = new UserModel();
$username=test_input($_POST['username']);
$password=md5($_POST['password']);
session_start();
session_destroy();
if(isset($_POST['action']) && $_POST['action'] == 'Admin' ){
    $Us = $usermodel->getloginAdmin($username, $password);
}
else {
    $Us = $usermodel -> getlogin($username,$password);
}

if($Us === 0){
	//header('location:'.'http://www.google.com'); //a modifier vers url erreur login
    echo '0';
}
else{

	if(!isset($_SESSION['username']) && !isset($_SESSION['password']) ){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id_user'] = $Us->getid_user();
            $_SESSION['email'] = $Us->getEmail();
            $_SESSION['privilege'] = $Us->getPrivilege();
            echo '1';
	}
}

