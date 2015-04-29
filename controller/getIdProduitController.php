<?php
session_start();
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
echo json_encode($_SESSION['id_produit']);	
?>