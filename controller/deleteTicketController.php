<?php
require_once '../model/ticketModel.php';
$id_ticket = htmlspecialchars($_GET["id"]);
$ticketModel = new ticketModel();
$ticketModel->deleteTicket($id_ticket);
$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);

?>