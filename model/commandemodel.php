<?php
    include_once 'commande.php';
    require_once '../Configuration.php';
    
    class UserModel {
        
        
        public function __construct() {
            
        }
        
       public function ajoutercommande(){
        $db = new Db();

        $date= $_POST['date'];
        $total = $_POST['total'];
        
        
        $sql = "INSERT INTO commande (date , total ) "
                . "VALUES ('".$date."','".$total."')";
        
        $db-> query($sql);
    } 

    public function rechercheuser($rech)
    {
        $bdd = new Db();
        $tableau = array();
        $query = "SELECT users.nom, users.prenom,produit.nom, commande.date FROM commande INNER JOIN ligne_commande ON commande.id_commande= ligne_commande.id_commande INNER JOIN produit ON ligne_commande.id_produit=produit.id_produit inner join users on users.id_user = commande.id_user WHERE users.id_user =like '%$rech%'";
        $resultat = $bdd->query($query) ;
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0;
            while($data = $resultat->fetch_assoc())
            {
                array_push($tableau, $data);
                $i++;   
            }
            return $tableau;
    }

    public function affichercommande(){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM commande";
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
        
        

}

    

?>