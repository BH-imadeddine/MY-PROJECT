<?php
include '../../Formulaire/include/connexion.php';
$dated=$_POST['dateD'];
$datef=$_POST['dateF'];
$matV=$_POST['matVehi'];
$agence=$_POST['agence'];
$montant=$_POST['montantMis'];
$id=$_GET['id'];
$req="UPDATE `parcauto`.`assurance` SET `datedebut_assur` = '$dated', `datefin_assur` = '$datef', `agence` = '$agence', `mattriculation_vehi` = '$matV', `montant_ass` = '$montant' WHERE `assurance`.`id_assurance` = '$id'";

$db->query($req);
header('location:../../Formulaire/liste_assurance.php?confirm=2');
?>
