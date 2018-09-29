<?php
include '../../Formulaire/include/connexion.php';
$datedebut_visi=$_POST['dateD'];
$datefin_visi=$_POST['dateF'];
$montant_visi=$_POST['montantMis'];
$matricule_vehicule=$_POST['matVehi'];


$req="INSERT INTO visitetechnique(`datedebut_visi`,`datefin_visi`,`montant_visi`,`mattriculation_vehi`)
 values('$datedebut_visi','$datefin_visi','$montant_visi','$matricule_vehicule')";
if($db->query($req)){

header('location:../../Formulaire/liste_visitetechnique.php?confirm=1');}
else{


header('location:../../Formulaire/liste_visitetechnique.php?confirm=4');
}