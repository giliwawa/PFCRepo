<?php
require_once 'favoris.php';
require_once '../configuration.php';
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
    private $favoris;
    
    public function __construct() {
        $bdd = new Configuration();
        $bdd->connexion();
    }
    
    public function getFavoris($id)
    {
        $query = "SELECT * FROM favoris WHERE id_favoris = ".$id ;
        $resultat = mysql_query($query);
        $Fa = new Favoris($resultat);
        return $Fa;       
    }
    
            
            
    
}
