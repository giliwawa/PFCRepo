<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HotFixCommandeModel
 *
 * @author Giliwawaa
 */
require_once '../Configuration.php';
class HotFixCommandeModel {
    //put your code here
    public function insertOrder($total,$qte){
        session_start();
        $bdd = new Db();
        $date = date("Y-m-d");
        $qry = "INSERT INTO commande (id_user , date ,total) "
                . "VALUES(".$_SESSION['id_user'].",'".$date."',".$total." ); ";
        $query = "update users set nbr_point = nbr_point + ".($total/100)."where id_user = ".$_SESSION['id_user'];
        $bdd->query($qry);
        $bdd->query($query);
        $lastId = $this->getInsertedId();
        if(!empty($_SESSION['id_produit'])){
            $panier = array();
            $panier = $_SESSION['id_produit'];
            $i = 0;
            foreach ($panier as $elt){
                foreach ($elt as $key => $value){
                    $id_produit = $value;
                    $quantite = $qte[$i];
                    $i++;
                    $query = "INSERT INTO ligne_commande (id_commande, id_produit, quantite) "
                            . "VALUES(".$lastId.",".$id_produit.",".$quantite."); ";
                    $bdd->query($query);
                }
            }
        }
    }
    public function getInsertedId(){
        $bdd = new Db();

        $query = "SELECT LAST_INSERT_ID() id_commande";
        $result = $bdd->query($query);
        $data = $result->fetch_assoc();
        return $data["id_commande"];
    }








































































    public function getAllDaStuff($id_user)
    {
        $bdd = new Db();
        $tableau = array();
        $inception ="SELECT commande.id_commande, commande.date, produit.nom, ligne_commande.quantite FROM commande INNER JOIN ligne_commande ON commande.id_commande= ligne_commande.id_commande INNER JOIN produit ON ligne_commande.id_produit=produit.id_produit inner join users on users.id_user = commande.id_user WHERE users.id_user =".$id_user;
        $result = $bdd->query($inception);
        $i=0;
        while ($data= $result->fetch_assoc()) {
            $tableau[$i]=$data;
            $i++;
        }
        return $tableau;
    }
}
