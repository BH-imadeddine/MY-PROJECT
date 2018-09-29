<?php
include '../../Formulaire/include/connexion.php';
$dated=$_POST['dateD'];
$datef=$_POST['dateF'];
$matV=$_POST['matVehi'];
$agence=$_POST['agence'];
$montant=$_POST['montantMis'];
$req="INSERT INTO assurance(datedebut_assur,datefin_assur,agence,mattriculation_vehi,montant_ass) values('$dated','$datef','$agence','$matV',$montant)";
$db->query($req);
header('location:../../Formulaire/liste_assurance.php?confirm=1');
?>
