<?php
include '../../include/connexion.php';
$datedebutamor=$_POST['datedebut_amor'];
$periode=$_POST['periode'];
$datefinamor=$_POST['datefin_amorti'];
$montant_voitu=$_POST['montant_voiture'];
$montant_anuel=$_POST['montant_anuet'];
$matV=$_POST['matVehi'];
$idvi=$_GET['Idamortissement'];

$reg="UPDATE `parcauto`.`amortissement` SET `datedebut_amort` = '$datedebutamor', `periode` = '$periode', `datefin_amorti` = '$datefinamor', `montant_voiture` = '$montant_voitu', `montant_anuet` = '$montant_anuel', `mattriculation_vehi`= '$matV'  WHERE `amortissement`.`id_amortissement` = '$idvi'";

if ($db->exec($reg))
             {
                   header('location:../../Formulaire/amortissement.php?confirm=2');
             }
               else
                {
                   header('location:../error.php');
                }
?>
