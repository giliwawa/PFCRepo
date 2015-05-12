<?php
session_start();
if(isset($_GET['id_produit'])){
    $id_produit=htmlspecialchars($_GET['id_produit']);
    $tabId=array('id_produit'=>$id_produit);
    if(!empty($_SESSION['id_produit']))
    {
            $tabIdPlein=$_SESSION['id_produit'];
            foreach ($tabIdPlein as $elt) {
                    foreach ($elt as $key => $value) {
                        if($elt['id_produit'] === $id_produit){
                                echo "0";
                                return false;
                        }
                        // echo $key.":".$value;
                    }
            }
            array_push($tabIdPlein, $tabId);
            $_SESSION['id_produit']=$tabIdPlein;
    }
    else{
            $tmp = array();

            array_push($tmp,$tabId);
            $_SESSION['id_produit'] = $tmp;

    }
}
if(isset($_POST['id_rm'])){
    $i = 0;
    $result = 0;
    $id = $_POST['id_rm'];
    $tmp= array();
    $tmp = $_SESSION['id_produit'];
    foreach ($tmp as $key => $value){
        foreach ($value as $id_pr) {
            if($id === $id_pr){
                unset($tmp[$key]);
                $result = 1;
            }
        }
    }
    $_SESSION['id_produit'] = $tmp; 
    echo $result;
}
	
?>