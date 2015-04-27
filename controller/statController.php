<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/statModel.php';

$model = new StatModel();

if(isset($_POST['action']))
{
    $action = $_POST['action'];
    if($action === "qte_prod"){
        $model->getPurchaseByQuantite();
    }
    if($action === "qte_mois")
    {
        $model->getPurchaseByMonth();
    }
    
}


