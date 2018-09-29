 <?php
include '../../Formulaire/include/connexion.php';
$Lordre_service=$_POST['LordSer'];
$libelle_service=$_POST['libelserc'];
$matricule_vehicule=$_POST['matVehi'];


$reg="INSERT INTO service(`lordre_service`,`libelle_service`,`mattriculation_vehi`) values('$Lordre_service','$libelle_service','$matricule_vehicule')";
$db->query($reg);
header('location:../../Formulaire/liste_service.php');?>

