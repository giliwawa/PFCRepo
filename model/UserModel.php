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

    public function afficherUser(){
            $tableau = array();
            $query = "SELECT * FROM users";
            $resultat = mysql_query($query) or die("Ereur ".mysql_error()) ;
            $i = 0;
            while($data = mysql_fetch_array($result))
            {
                $Pr = new produit($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
        }    
        
        
    }
?>