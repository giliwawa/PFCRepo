<?php 
require '../model/UserModel.php';

$usermodel = new UserModel();
$username=$_POST['username'];
$password=$_POST['password'];
session_start();
session_destroy();
//echo json_encode($usermodel -> getlogin($username,$password));
//$tab = array('id_user' => 1,'nom' => 'ddd','prenom' => 'rrr','sexe' => 'M ');
$Us = new user($usermodel -> getlogin($username,$password));
//echo $Us->getId();
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
            $_SESSION['email'] = $Us->getemail();
            //echo $Us->getId();
	}
        
}
 ?>