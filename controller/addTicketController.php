<?php

require_once '../model/ticketModel.php';
$ticket = new ticket();
$ticketModel = new ticketModel();
session_start();

$ticket->setid_user($_SESSION['id_user']);
$ticket->setname($_POST['name']);
$ticket->setemail($_POST['email']);
$text= '<b>'.$_POST['sujet'].'</b><br> ' .$_POST['text'];
$ticket->settext($text);

$ticketModel->ajouterTicket($ticket);
$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>