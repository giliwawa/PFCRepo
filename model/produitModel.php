<?php
    include_once 'produit.php';
    require_once 'Configuration.php';
    
    class ProduitModel {
        public function __construct() {
            $bdd = new Configuration() ;
            $bdd->connexion();
        }
        
        public function afficher(){
            $tableau = array();
            $query = "SELECT * FROM produit";
            $resultat = mysql_query($query) or die("Ereur ".mysql_error()) ;
            $i = 0;
            while($data = mysql_fetch_array($resultat))
            {
                $Pr = new produit($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
        }
        public function afficher_categorie($cat){
            $tableau = array();
            $querry = "SELECT * FROM produit WHERE categorie=".$categorie;
            $resultat = mysql_query($query) or die("erreur".mysql_error());
            $i=0;
            while ($data = mysql_fetch_array($resultat)) {
                 # code...
                $Pr = new produit($data);
                $tableau[$i] = $Pr;
                $i++;
             } 
             return $tableau;
        }        
        
        
    }
?>