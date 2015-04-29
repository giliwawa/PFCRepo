<?php
require_once '../model/HotFixCommandeModel.php';

$model = new HotFixCommandeModel();
$model->insertOrder($_POST['tot'],$_POST['qte']);


