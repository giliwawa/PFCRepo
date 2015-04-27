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

    public function afficherUser(){
            $tableau = array();
            $query = "SELECT * FROM users";
            $resultat = $db->query($query) ;
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
        $tableau = array();
        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $resultat = $db->query($query) ;
        $i = 0;
        while($data = $resultat->fetch_assoc())
            {
                $Pr = new user($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
    }
        
}

    

?>