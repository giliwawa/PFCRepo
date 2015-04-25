<?php
	require_once '../model/ticketModel.php';
	$ticketModel=new ticketModel();
	$i = $ticketModel->countRow();
	echo $i;
?>