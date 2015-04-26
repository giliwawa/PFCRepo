<?php
	require_once '../model/ticketModel.php';
	$ticketModel=new ticketModel();
	$i = $ticketModel->countRow();
	echo "<span class='new badge'>".$i."</span>";
?>