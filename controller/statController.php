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
    $model->getPurchaseByQuantite();
}


