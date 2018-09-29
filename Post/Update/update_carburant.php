<?php
include '../../Formulaire/include/connexion.php';
$vehiC=$_POST['vehiC'];
$typeC=$_POST['typeC'];
$quantiteC=$_POST['quantiteC'];

$montC=$_POST['montC'];
$dateC=$_POST['dateC'];
$id=$_GET['id'];
$req="UPDATE `parcauto`.`carburant` SET `type_carbu` = '$typeC', `quantite` = '$quantiteC',`mattriculation_vehi` = '$vehiC', `montant_cab` = '$montC',`dateC` = '$dateC' WHERE `carburant`.`id_carburant` = '$id'";
$db->query($req);
header('location:../../Formulaire/list_carburant.php?confirm=2');
?>