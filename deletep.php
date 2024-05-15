<?php 
include "controllerCpan.php";
$panierC = new pani();
$panierC->deletepanier($_GET["id"]);
header('Location:panier.php');
?>