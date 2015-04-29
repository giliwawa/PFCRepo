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
    public function insertOrder($total){
        $bdd = new Db();
        $date = date("Y-m-d");
        $query = "BEGIN;"
                . "INSERT INTO commande (id_user , date ,total) "
                . "VALUES(6,'2015-04-06',5000 ); "
                . "INSERT INTO ligne_commande (id_commande, id_produit, quantite) "
                . "VALUES(LAST_INSERT_ID(),9, 1); "
                . "update produit set quantite = quantite -1 where id_produit = 9; "
                . "COMMIT;";
    }
}







































































