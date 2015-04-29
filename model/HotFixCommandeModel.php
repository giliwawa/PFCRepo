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
        $bdd->query($qry);
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
}







































































