<?php
include '../../Formulaire/include/connexion.php';
$id=$_GET['id'];
$req="DELETE FROM `parcauto`.`carburant` WHERE `carburant`.`id_carburant` = $id";
$db->query($req);
header('location:../../Formulaire/list_carburant.php?confirm=3');
?>
