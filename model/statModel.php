<?php
require_once '../Configuration.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class StatModel
{
    
    public function getPurchaseByQuantite()
    {
        $bdd = new Db();
        $query = 'SELECT produit.nom AS produit, SUM(ligne_commande.quantite) as quantite '
                . 'FROM produit INNER JOIN ligne_commande ON produit.id_produit = ligne_commande.id_produit '
                . 'GROUP BY produit.id_produit ';
        $result = $bdd->select($query);
        echo json_encode($result);
    }
}