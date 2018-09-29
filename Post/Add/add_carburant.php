<?php
include '../../Formulaire/include/connexion.php';
$vehiC=$_POST['vehiC'];
$typeC=$_POST['typeC'];
$quantiteC=$_POST['quantiteC'];

$montC=$_POST['montC'];
$dateC=$_POST['dateC'];

$req="INSERT INTO carburant(type_carbu,quantite,mattriculation_vehi,montant_cab,dateC) values('$typeC',$quantiteC,'$vehiC',$montC,$dateC)";

$db->query($req);
header('location:../../Formulaire/list_carburant.php?confirm=1');
?>
