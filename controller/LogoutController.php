<?php
session_start();
$url = "";
if($_SESSION['privilege'] === '0' ){
    $url = '../view/index.php';
}else{
    $url = '../admin';
}
session_destroy();


header('location:'.$url);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

