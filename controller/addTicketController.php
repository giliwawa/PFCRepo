<?php

require_once '../model/ticketModel.php';
require_once 'secure.php';
$ticket = new ticket();
$ticketModel = new ticketModel();
$name=$email="";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
}

$ticket->setid_user($_SESSION['id_user']);
$ticket->setname($name);
$ticket->setemail($email);
$text= '<b>'.$_POST['sujet'].'</b><br> ' .$_POST['text'];
$ticket->settext($text);

$ticketModel->ajouterTicket($ticket);
$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>