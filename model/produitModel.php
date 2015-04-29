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
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
}
           $i = 0 ;
            while ($data = $resultat -> fetch_assoc()) {
                $Pr = new produit($data);
                $tableau[$i] = $Pr;
                $i++;
            }
            return $tableau;
        }
        public function afficher_categorie($categorie){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM produit WHERE categorie='".$categorie."'";
            $resultat = $bdd->query($query);
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
}
           $i = 0 ;
            while ($data = $resultat -> fetch_assoc()) {
                $Pr = new produit($data);
                $tableau[$i] = $Pr;
                $i++;
            }
            return $tableau;
        }      

        public function Count($categorie)
        {
            $bdd = new Db();
            $query = "SELECT * FROM produit WHERE categorie='".$categorie."'";
            $resultat = $bdd->query($query);
            $i = 0;
            while ($data = $resultat ->fetch_assoc()) {
                $i++;
            }
            return $i;
        }  
        public function loadcategories()
        {
            $bdd = new Db();
            $categories = array();
            $query = "SELECT categorie FROM produit GROUP BY categorie";
            $resultat = $bdd->query($query);
            $i = 0;
            while ($data = $resultat ->fetch_assoc()) {
                array_push($categories, $data);
            }
            return $categories ;
        }
        public function ajouterproduit($product)
        {
            $bdd = new Db();
            $requete="INSERT INTO produit (nom, reference, categorie, quantite, prix, image, description) VALUES ('".$product->getnom()."','".$product->getreference()."','".$product->getcategorie()."','".$product->getquantite()."','".$product->getprix()."','".$product->getimage()."','".$product->getdescription()."')";
            $bdd->query($requete);
        }
        
        public function searchId($id)
        {
            $bdd =new Db();
            $query="SELECT * FROM produit WHERE id_produit=".$id;
            $resultat=$bdd->query($query);
            $data= $resultat->fetch_assoc();
            $Pr = new produit($data);
            return $Pr;
        }

        public function getFavorisById($id_user)
        {
            $bdd = new Db();
            $query="SELECT * FROM produit INNER JOIN favoris ON produit.id_produit=favoris.id_produit WHERE favoris.id_user=".$id_user;
            $result=$bdd->query($query);
            $tableau = array();
            $i = 0 ;
            while ($data = $result -> fetch_assoc()) {
                $Pr = new produit($data);
                $tableau[$i] = $Pr;
                $i++;
            }
            return $tableau;
        }

    }

        
   
?>