<?php
    include_once 'user.php';
    require_once '../Configuration.php';
    require_once '../Configuration_forum.php';
    require_once '../controller/secure.php';
    
    class UserModel {
        
        
        public function __construct() {
            
        }
        
       public function ajouterUser(){
        $db = new Db();
        $db_forum = new Db_forum();

        $prenom = test_input($_POST['prenom']);
        $nom = test_input($_POST['nom']);
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $username = test_input($_POST['username']);
        $password = md5($_POST['password']);
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$username."','".$password."')";
        
        $quer = "INSERT INTO forum (username, username_clean, user_password, user_birthday) "
                . "VALUES ('".$username."','".$username."','".$password."','".$date_naissance."')";

echo $quer;
        $db-> query($sql);
        $db_forum-> query($quer);
    } 

    public function ajouterAdminUser(){
        $db = new Db();

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $adresse = $_POST['adresse'];
        $CIN = $_POST['CIN'];
        $num_tel = $_POST['num_tel'];
        $nbr_point = $_POST['nbr_point'];
        $email = $_POST['email'];
        $privilege = $_POST['privilege'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, adresse, CIN, num_tel, nbr_point, email, privilege, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$adresse."','".$CIN."','".$num_tel."','".$nbr_point."','".$email."','".$privilege."','".$username."','".$password."')";
        
        $db-> query($sql);
    }        

    public function rechercheuser($rech){
        $bdd = new Db();
        $tableau = array();
        $query = "SELECT * FROM users WHERE prenom like '%$rech%' or nom like '%$rech%' or sexe like '%$rech%' or date_naissance like '%$rech%' or adresse like '%$rech%' or CIN like '%$rech%' or num_tel like '%$rech%' or nbr_point like '%$rech%' or email like '%$rech%' or privilege like '%$rech%' or username like '%$rech%' or password like '%$rech%' ";
        $resultat = $bdd->query($query) ;
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0;
            while($data = $resultat->fetch_assoc())
            {
                $Pr = new user($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
    }

    public function recherche_user_id($id_user){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM users WHERE id_user='".$id_user."'";
            $result = $bdd->query($query);
            if (!$result) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0 ;
            if($result){
                while ($data = $result->fetch_assoc()) {
                    $Tc = new user($data);
                    $tableau[$i] = $Tc;
                    $i++;
                    }
                return $tableau;
                }
            else{
                    return 0;
                }
            
        }

    public function updateuser($id_user,$form){
        $bdd = new Db();

        if($form[10]==="")
        {
            $query = "UPDATE users SET prenom = '".$form[0]."', nom = '".$form[1]."', date_naissance = '".$form[2]."', adresse = '".$form[3]."', CIN = ".$form[4].", num_tel = ".$form[5].", nbr_point = ".$form[6].", email = '".$form[7]."', privilege = '".$form[8]."', username = '".$form[9]."' WHERE id_user =".$id_user;
        }
        else
        {
            $query = "UPDATE users SET prenom = '".$form[0]."', nom = '".$form[1]."', date_naissance = '".$form[2]."', adresse = '".$form[3]."', CIN = ".$form[4].", num_tel = ".$form[5].", nbr_point = ".$form[6].", email = '".$form[7]."', privilege = '".$form[8]."', username = '".$form[9]."', password = '".md5($form[10])."' WHERE id_user =".$id_user;

        }
        $bdd -> query($query);
    }

    public function updateuser_user($id_user,$form){
        $bdd = new Db();

        if($form[8]==="")
        {
            $query = "UPDATE users SET prenom = '".$form[0]."', nom = '".$form[1]."', date_naissance = '".$form[2]."', adresse = '".$form[3]."', CIN = ".$form[4].", num_tel = ".$form[5].", email = '".$form[6]."', username = '".$form[7]."' WHERE id_user =".$id_user;
        }
        else
        {
            $query = "UPDATE users SET prenom = '".$form[0]."', nom = '".$form[1]."', date_naissance = '".$form[2]."', adresse = '".$form[3]."', CIN = ".$form[4].", num_tel = ".$form[5].", email = '".$form[6]."', username = '".$form[7]."', password = '".md5($form[8])."' WHERE id_user =".$id_user;

        }
        $bdd -> query($query);
    }

    public function afficherUser(){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM users";
            $resultat = $bdd->query($query) ;
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0;
            while($data = $resultat->fetch_assoc())
            {
                $Pr = new user($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
        }
        
        public function getlogin($username,$password){

        $db = new Db();
        
        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $resultat = $db->query($query) ;
        $i = 0;
        $data = $resultat->fetch_assoc(); 
        if($data){
            $Pr = new user($data);
            return $Pr;
        }else {
            return 0;
        }
        
        }
    public function getloginAdmin($username,$password){

        $db = new Db();
        
        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' AND privilege = 1";
        $resultat = $db->query($query) ;
        
        $data = $resultat->fetch_assoc(); 
        if($data){
            $Pr = new user($data);
            return $Pr;
        }
        else{
            return 0;
        }
    }

    public function deleteUser($id)
        {
            $bdd = new Db();
            $query = "DELETE FROM users WHERE id_user = ".$id;
            $result=$bdd->query($query);
            if (!$result) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
        }
        
    public function loadiduser($a)
    {
            $bdd = new Db();
            $categories = array();
            $query = "SELECT  from  'id_user' where id_user =$d ";
            $resultat = $bdd->query($query) ;
            return ($resultat);
    }
    public function getUserId($id)
    {
        $bdd = new Db();
        $query = "SELECT * FROM users WHERE id_user=".$id;
        $result = $bdd->query($query);
        $data = $result->fetch_assoc();
        $us = new user($data);
        return $us;
    }

    public function modifyPassword($user)
    {
        $bdd = new Db();
        $query = "UPDATE users SET password = '".$user->getpassword()."' WHERE email ='".$user->getEmail()."'";
        $bdd->query($query);
    }
}

?>