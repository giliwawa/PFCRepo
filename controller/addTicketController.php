<?php

require_once '../model/ticketModel.php';
$ticket = new ticket();
$ticketModel = new ticketModel();

$ticket->setname(mysql_real_escape_string($_POST['name']));
$ticket->setemail(mysql_real_escape_string($_POST['email']));
$text=mysql_real_escape_string($_POST['sujet']).'\n'.mysql_real_escape_string($_POST['text']);
$ticket->settext($text);

$ticketModel->ajouterTicket($ticket);
header("location:../index.php");
?>