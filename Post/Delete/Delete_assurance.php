<?php
include '../../Formulaire/include/connexion.php';
$id=$_GET['id'];
$req="DELETE FROM `parcauto`.`assurance` WHERE `assurance`.`id_assurance` = $id";
$db->query($req);
header('location:../../Formulaire/liste_assurance.php?confirm=3');
?>
