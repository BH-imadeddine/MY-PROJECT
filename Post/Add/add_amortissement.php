<?php
include '../../include/connexion.php';
$datedebutamor=$_POST['datedebut_amor'];
$periode=$_POST['periode'];
$datefinamor=$_POST['datefin_amorti'];
$montant_voitu=$_POST['montant_voiture'];
$montant_anuel=$_POST['montant_anuet'];
$matV=$_POST['matVehi'];


$reg="INSERT INTO amortissement(datedebut_amort,periode,datefin_amorti,montant_voiture,montant_anuet,mattriculation_vehi) values('$datedebutamor','$periode','$datefinamor','$montant_voitu','$montant_anuel','$matV')";
if($db->query($reg)){

header('location:../../Formulaire/amortissement.php');}
else{


header('location:error.php');
}

