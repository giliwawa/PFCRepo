<?php
require_once 'favoris.php';
require_once '../Configuration.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of favorisModel
 *
 * @author Giliwawaa
 */
class favorisModel {
    
    public function __construct() {
    }
    
    public function getFavoris($id)
    {
        $query = "SELECT * FROM favoris WHERE id_favoris = ".$id ;
        $resultat = mysql_query($query);
        $Fa = new Favoris($resultat);
        return $Fa;       
    }
    
    public function addFavoris($favoris)
    {
        $bdd = new Db();
        $requete="INSERT INTO favoris (id_produit, id_user) VALUES (".$favoris->getid_produit().",".$favoris->getid_user().")";
        $bdd->query($requete);
    }
    
    public function deleteFavoris($favoris)
          {
            $bdd = new Db();
            $query = "DELETE FROM favoris WHERE id_produit = ".$favoris->getid_produit()." AND id_user = ".$favoris->getid_user();
            $result=$bdd->query($query);
          }    

    public function favoris_slider()
    {
        $fav = array();
        $bdd = new Db();
        $query = "SELECT id_produit FROM favoris GROUP by id_produit ORDER BY count(id_produit) DESC";
        $resultat = $bdd->query($query);

           
            while ($data = $resultat -> fetch_assoc()) {
                array_push($fav, $data);
                
            }
            return $fav;
    }  
            
    
}
