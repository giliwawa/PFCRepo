<?php
    include_once 'user.php';
    require_once '../configuration.php';
    
    class UserModel {
        
        
        public function __construct() {
            
        }
        
       public function ajouterUser(){
        $db = new Db();

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$username."','".$password."')";
        
        $db-> query($sql);
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
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (iprenom, nom, sexe, date_naissance, adresse, CIN, num_tel, nbr_point, email, privilege, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$adresse."','".$CIN."','".$num_tel."','".$nbr_point."','".$email."','".$privilege."','".$username."','".$password."')";
        
        $db-> query($sql);
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
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $resultat = $db->select($query) ;
        if($resultat){
            return $resultat;
            
        }
        else return 0;
    }
        
    }

    

?>