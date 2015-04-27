<?php
require '../configuration.php';
$bdd= new Db();
$req="select count(*) from users where sexe='homme'";
$s=$bdd->query($req);
echo $s;
?>