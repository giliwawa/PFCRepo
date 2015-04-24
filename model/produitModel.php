<?php
    include_once 'produit.php';
    require_once '../Configuration.php';
    
    class ProduitModel {
        public function __construct() {
        }
        
        public function afficher(){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM produit";
            $resultat = $bdd->query($query);
           $i = 0 ;
            while ($data = $resultat -> fetch_assoc()) {
                $Pr = new produit($data);
                $tableau[$i] = $Pr;
                $i++;
            }
            return $tableau;
        }
        public function afficher_categorie($cat){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM produit WHERE categorie=".$categorie;
            $resultat = $bdd->query($query);
           $i = 0 ;
            while ($data = $resultat -> fetch_assoc()) {
                $Pr = new produit($data);
                $tableau[$i] = $Pr;
                $i++;
            }
            return $tableau;
        }        
        
        
    }
?>