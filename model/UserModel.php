<?php
    include_once 'user.php';
    require_once '../configuration.php';
    
    class UserModel {
        
        
        public function __construct() {
            $bdd = new Configuration() ;
            $bdd->connexion();
        }
        
       public function ajouterUser(){
        $bdd = new DBConnect('localhost', 'pfc', 'root', '');
        $prenom = $nom = $sexe = $date_naissance = $adresse = $CIN = $num_tel = $username = $password = "";

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $adresse = $_POST['adresse'];
        $CIN = $_POST['CIN'];
        $num_tel = $_POST['num_tel'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, adresse, CIN, num_tel, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$adresse."','".$CIN."','".$num_tel."','".$username."','".$password."')";
        
        $bdd->QueryExecute($sql);
    }        
        
        
    }
?>