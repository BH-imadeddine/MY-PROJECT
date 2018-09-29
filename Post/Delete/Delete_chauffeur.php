<?php
include '../../Formulaire/include/connexion.php';
$id=$_GET['id'];
$req="DELETE FROM `parcauto`.`chauffeur` WHERE `chauffeur`.`matricul_chauf` = '$id'";
$db->query($req);
header('location:../../Formulaire/list_chauf.php?confirm=3');
?>
